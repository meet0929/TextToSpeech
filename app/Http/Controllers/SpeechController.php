<?php

namespace App\Http\Controllers;

use App\Models\Country;
use App\Models\UserSubscription;
use App\Models\favoriteVoices;
use App\Models\VoiceHistories;
use App\Models\CustomVoices;
use Illuminate\Http\Request;
use App\Toastr;
use Illuminate\Support\Facades\Http;
use GuzzleHttp\Psr7\Stream;
use App\SpeechService;
use Carbon\Carbon;
use Auth;
class SpeechController extends Controller
{

    protected $speechservice ;
    protected $countries;
    protected $toastr;
    public function __construct(SpeechService $speechservice, Toastr $toastr, Country $countries) {
        $this->speechservice = $speechservice;
         $this->toastr = $toastr;
        $this->countries =$countries->orderBy('country_name','asc')->get();

    }
    public function index() {
        $response = [];

        $user = auth()->user();
        $userSub = $user->userSubsc ?? null;

        if(empty($userSub)){
            return redirect()->route('pricing');
        }
        $createdAt = Carbon::parse($userSub['created_at']);

        // Get current date
        $currentDate = Carbon::now();
        // Compare created_at date with current date
        if ($createdAt->gt($currentDate)) {
            return redirect()->route('pricing');
        } else {
            return view('speech-synthesis', $response);
        }
    }
    public function voiceLab() {
        $voices= $this->getVoices()['voices'];
        //dd($voices);
        $myvoices= $this->customvoices()->toArray();
        //dd($myvoices);
        $matchingIds = array_column($myvoices, 'voice_id');

        // Filter the first array based on 'history_item_id' presence in $matchingIds
        $filteredArray = array_filter($voices, function ($item) use ($matchingIds) {
            return in_array($item['voice_id'], $matchingIds);
        });

        $response['generatedvoices'] = $myvoices;
        return view('voice-lab', $response);
    }
    public function getVoiceData(Request $request) {
        $response['shared_voices'] = $this->getSharedVoice($request->all())['voices'];
        $response['all_shared_voices'] = $this->getSharedVoice()['voices'];       
        $response['categories'] =  $this->getAllCategories($response['all_shared_voices']);
        $response['use_cases'] =  $this->getAllUseCase($response['all_shared_voices']);     
        $response['age'] =  $this->getAllAge($response['shared_voices']);
        $response['accent'] =  $this->getAllAccent($response['shared_voices']);
        $response['parameters'] = $this->GenerateVoiceParameters();
        $response['voices'] = $this->getVoices()['voices'];
        return response()->json($response);
    }
  
    public function getSharedVoice($data='')
    {
        return $sharedvoice = $this->speechservice->getSharedVoice($data);       
    }
    public function getVoices()
    {
        return $voices = $this->speechservice->getVoices();       
    }
    public function getAllCategories($objectsArray) {
        $categories = [];
        foreach ($objectsArray as $key => $obj) {

            $categoryName = $obj['category'];
            // Check if the category name already exists in the $categories array
            $existingCategory = array_filter($categories, function($category) use ($categoryName) {
                return $category['shortname'] === $categoryName;
            });

            // If the category does not exist in the $categories array, add it
            if (empty($existingCategory)) {
                $categories[] = [
                    'shortname' => $categoryName,
                    'name' => ucwords($categoryName)
                ];
            }
        }
        return $categories;
    }
    public function getAllUseCase($objectsArray) {
        $use_cases = [];
        foreach ($objectsArray as $obj) {
            $usecasename  = $obj['use_case'];
            $existingUseCase = array_filter($use_cases, function($usecase) use ($usecasename) {
                return $usecase['shortname'] === $usecasename;
            });
            if (empty($existingUseCase)) {
                $use_cases[] = [
                    'shortname' => $usecasename,
                    'name' => ucwords(str_replace('_', ' & ', $usecasename))
                ];
            }

        }
        return $use_cases;
    }
    public function getAllAge($objectsArray) {
        $age_array = [];
        foreach ($objectsArray as $obj) {
            $agevalue  = $obj['age'];
            $existingage = array_filter($age_array, function($age) use ($agevalue) {
                return $age['shortname'] === $agevalue;
            });
            if (empty($existingage)) {
                $age_array[] = [
                    'shortname' => $agevalue,
                    'name' => ucwords(str_replace('_', ' & ', $agevalue))
                ];
            }

        }
        return $age_array;
    }
    public function getAllAccent($objectsArray) {
        $accent_array = [];
        foreach ($objectsArray as $obj) {
            $accentvalue  = $obj['accent'];
            $existingaccent = array_filter($accent_array, function($accent) use ($accentvalue) {
                return $accent['shortname'] === $accentvalue;
            });
            if (empty($existingaccent)) {
                $accent_array[] = [
                    'shortname' => $accentvalue,
                    'name' => ucwords(str_replace('_', ' & ', $accentvalue))
                ];
            }
        }
        return $accent_array;
    }
    public function GenerateVoiceParameters() {
        return $voiceparameters = $this->speechservice->GenerateVoiceParameters(); 
    }
    public function VoiceGenerated(Request $request) {
        $data = $request->all();
        $generatevoice = $this->speechservice->GenerateVoice($data);
        return $res= json_decode($generatevoice->getContent());
    }

    public function createVoice(Request $request) {
        $data = $request->all();

        // $savevoice = $this->speechservice->createVoice($data);
        // return $res= json_decode($savevoice->getContent());
        try {        
                
            $request->validate([
                'generated_voice_id' => 'required|string',
                'voice_name'=>'required|string',
                'voice_description'=>'required|string',
            ]);

            $item = new CustomVoices();
            $item->user_id = Auth::id();  
            $item->voice_id = $request['generated_voice_id'];

            $item->name = $request['voice_name'];
            $item->description = $request['voice_description'];
            $item->age = $request['age'];
            $item->gender = $request['gender'];
            $item->accent = $request['accent'];
            $item->accent_strength = $request['accent_strength'];
            $item->audio_path = $request['files'];

            $responseData = array('voice_id'=>$item->voice_id);
            $outputdata = array('status' => '200', 'response' =>  $responseData, 'message' =>  'You have successfully created custom voice');

            if($item->save()) {
                $outputdata = array('status' => '200', 'message' =>  'You have successfully created custom voice', true);
                $responseData = array('voice_id'=>$item->voice_id);
            } else {
                $responseData = array('detail'=>array('message'=>'Something wrong'));
                $outputdata = array('status' => '401', 'response' =>  $responseData, 'message' =>  'Something wrong');
            }
        } catch (\Exception $e) {
            // Other exceptions
            //echo "Error: " . $e->getMessage();
          
            $responseData = array('detail'=>array('message'=>$e->getMessage()));
            $outputdata = array('status' => '401', 'response' =>  $responseData, 'message' =>  $e->getMessage());
        }
        return $res= response()->json($outputdata);
    }
    public function textToSpeech($voice_id, Request $request ) {
        $data = $request->all();

        $generatevoice = $this->speechservice->textToSpeech($voice_id, $data);
        return $res= json_decode($generatevoice->getContent());
    }
    public function getVoice(Request $request) {
        $data = $request->all();
        return $getvoice = $this->getCustomvoice($data['voice_id']);
        //return $getvoice = $this->speechservice->getVoice($data); 
    }
    public function addVoice(Request $request) {
        $data = $request->all();
        return $getvoice = $this->speechservice->addVoice($data); 
    }
    public function editVoice(Request $request) {
        $data = $request->all();
        $getvoice = $this->speechservice->editVoice($data); 
        if($getvoice->getstatusCode() ==200) {
            $this->toastr->success('Voice updated successfully');
        } else{
            $this->toastr->error('Something wrong');
        }
        return redirect()->back();
    }
    public function removeVoice(Request $request) {
        $data = $request->all();
        $getvoice = $this->speechservice->removeVoice($data); 
    
        if($getvoice->getstatusCode() ==200) {
            $this->toastr->success('Voice deleted successfully');
        } else{
            $this->toastr->error('Something wrong');
        }
        return redirect()->back();
    }
    public function voiceSetting($voice_id) {
        return $voicesettings = $this->speechservice->voiceSetting($voice_id); 
    }
    public function voiceSettingUpdate($voice_id, Request $request) {
        return $voicesettings = $this->speechservice->voiceSettingUpdate($voice_id, $request->all()); 
    }
    public function history(Request $request) {
        $data = $request->all();
        $history = $this->speechservice->history($data)['history']; 
        $myhistory = $this->historyget()->toArray();
        $matchingIds = array_column($myhistory, 'history_item_id');

        // Filter the first array based on 'history_item_id' presence in $matchingIds
        $filteredArray = array_filter($history, function ($item) use ($matchingIds) {
            return in_array($item['history_item_id'], $matchingIds);
        });

        // Convert the filtered array to indexed array (optional, if needed)
        $filteredArray = array_values($filteredArray);
        $response['histories'] =$filteredArray;
        
        return view('history', $response);

    }
    public function historyDelete($history_item_id) {
        return $this->speechservice->historyDelete($history_item_id); 
    }
    public function historyDownload($history_item_ids) {
        try{
            return $this->speechservice->historyDownload($history_item_ids); 
        } catch(RequestException $e) {
            return response()->json(['error' => 'Failed to stream MP3.'], 500);
        }

    }
    public function historyAudioPlay($history_item_id) {
        return $this->speechservice->historyAudioPlay($history_item_id);
    }
    public function historyAction(Request $request) {
        if(isset($request['historydelete'])) {  
            foreach($request['history_item_id'] as $hid) {
                $result = $this->historyDelete($hid);
                if($result['status'] == 'ok') {
                $this->toastr->success('History deleted successfully');
                return redirect()->back();
                }
            }
        } else if(isset($request['historydownload'])) { 
            $res = $this->historyDownload($request['history_item_id']);
            $hisItemdata = VoiceHistories::select('created_at')->where('history_item_id',$request['history_item_id'])->where('user_id',Auth::id())->first();
            $dFormat = date('d-m-Y m:i',strtotime($hisItemdata->created_at));
            $filename = 'texttospeech.ai'.'_'.$dFormat.'.mp3';

            $bodyStream = $res->getBody();

            $contents = $bodyStream->getContents();
            $headers = [
                'Content-Type' => 'audio/mpeg',
                'Content-Disposition' => 'attachment; filename="'.$filename.'"',
            ];
            
            //$response = response()->make($contents, 200, $headers)->download('output.mp3');
            return response($contents, 200, $headers);
        } else{
            return false;
        }

    }
    public function elevenuserSubscription() {
        return $this->speechservice->userSubscription(); 
    }
    public function userSubscription() {
        $userSubscription =  UserSubscription::where('user_id', Auth::id())->first();
        return response()->json($userSubscription);
    }
    public function userSubscriptionUpdate(Request $request) {
        try {
            if($request['remainingchar'] > $request['newremainingchar']) {
                $update = UserSubscription::where('user_id', Auth::id())
                ->update([
                'remainingchar' => (int)($request['remainingchar'] - $request['newremainingchar'])
                ]);
                if($update) {
                    $outputdata = array('status' => '200', 'message' =>  'Successfully updated');
                } else {
                    $outputdata = array('status' => '401', 'message' =>  'Something wrong');
                }
            } else {
                $outputdata = array('status' => '401', 'message' =>  'You have not limit to generate a audio. Please contact your administrator.');
            }
            return response()->json($outputdata);
        } catch (\Exception $e) {
            // Other exceptions
            echo "Error: " . $e->getMessage();
        }
    }
    public function getModels() {
        return $this->speechservice->getModels(); 
    }
    public function voiceaddtofav(Request $request) {
        $request->validate([
            'voice_id' => 'required|string',
        ]);
        $item = new favoriteVoices();
        $item->user_id = Auth::id();  
        $item->voice_id = $request['voice_id'];  
        if($item->save()) {
            $outputdata = array('status' => '200', 'message' =>  'Successfully added to favorite');
        } else {
            $outputdata = array('status' => '401', 'message' =>  'Something wrong');
        }
        return response()->json($outputdata);
    }
    public function voiceremovefromfav(Request $request) {
        $delete  = FavoriteVoices::where('user_id', Auth::id())->where('voice_id' , $request['voice_id'])->delete();
        if($delete) {
            $outputdata = array('status' => '200', 'message' =>  'Successfully removed from favorite');
        } else {
            $outputdata = array('status' => '401', 'message' =>  'Something wrong');
        }
        return response()->json($outputdata);
    }
    public function getFavVoice() {
        $data = favoriteVoices::where('user_id',Auth::id())->get();
        $outputdata = array('status' => '200', 'response' => $data);
        return response()->json($outputdata);
    }
    public function historystore(Request $request) {

        $request->validate([
            'history_item_id' => 'required|string',
        ]);
        $item = new VoiceHistories();
        $item->user_id = Auth::id();  
        $item->history_item_id = $request['history_item_id'];  
        if($item->save()) {
            $outputdata = array('status' => '200', 'message' =>  'Successfully added to history');
        } else {
            $outputdata = array('status' => '401', 'message' =>  'Something wrong');
        }
        return response()->json($outputdata);
    }
    public function historyget() {
        return $data = VoiceHistories::where('user_id',Auth::id())->get();
    }
    public function customvoicestore(Request $request) {
        $request->validate([
            'voice_id' => 'required|string',
        ]);
        $item = new CustomVoices();
        $item->user_id = Auth::id();  
        $item->voice_id = $request['voice_id'];  
        if($item->save()) {
            $outputdata = array('status' => '200', 'message' =>  'Voice successfully added');
        } else {
            $outputdata = array('status' => '401', 'message' =>  'Something wrong');
        }
        return response()->json($outputdata);
    }
    public function customvoices() {
        return $data = CustomVoices::where('user_id',Auth::id())->get();
    }

    public function getCustomvoice($voice_id) {
        return $data = CustomVoices::where('voice_id',$voice_id)->get();
    }
}

