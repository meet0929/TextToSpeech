<?php
namespace App;

use GuzzleHttp\Client;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use App\Toastr;
use Auth;
class SpeechService
{
    protected $apiKey;
    protected $client;
    protected $toastr;
    public function __construct( Toastr $toastr)
    {
        $this->apiKey = env('TEXT_SPEECH_KEY');
        $this->client = new Client([
            'base_uri' => 'https://api.elevenlabs.io/v1/',
        ]);
        $this->toastr = $toastr;
    }

    public function getSharedVoice($data = '')
    {
        $url= 'shared-voices';
        if(!empty($data) ) {
            $url = 'shared-voices?' . http_build_query($data);
        }
       
        $response = $this->client->request('GET', $url, [
            'headers' => [
                'xi-api-key' => $this->apiKey, 
       
                'Content-Type' => 'application/json',             
            ],
             
        
        ]);

        return json_decode($response->getBody()->getContents(), true);
    }
      public function getVoices()
    {
        $response = $this->client->request('GET', 'voices', [
            'headers' => [
                'xi-api-key' => $this->apiKey,                
            ]
        ]);

        return json_decode($response->getBody()->getContents(), true);
    }
       public function GenerateVoiceParameters()
    {
        $response = $this->client->request('GET', 'voice-generation/generate-voice/parameters');

        return json_decode($response->getBody()->getContents(), true);
    }
    public function GenerateVoice($data)
    { 
       try {        
            $response = $this->client->request('POST', 'voice-generation/generate-voice', [
                'headers' => [
                    'xi-api-key' => $this->apiKey, 
                    'Content-Type' => 'application/json'               
                ],
                'json' => $data
            ]);
            $filename = Str::uuid().'.mp3';
            $rawData = $response->getBody()->getContents();	
            if (!File::exists(storage_path('app/public/speeches')))	{
                Storage::makeDirectory(public_path('storage/speeches'));
            }
            Storage::disk('speeches')->put($filename, $rawData);
        
            $speechFilelink =  asset('storage/speeches/'.$filename);							   		                 
            $urls["play_url"] = $speechFilelink;		   	
            $urls["download-file"] = $filename;			   
            $outputdata = array('status' => 200, 'responseText' => $urls,'response_headers' => $response->getHeaders(),'response' => json_decode($response->getBody()->getContents(), true));
            return response()->json($outputdata);		
        }catch (\GuzzleHttp\Exception\ClientException $e) {
            $response = $e->getResponse();
            $statusCode = $response->getStatusCode();
            $body = $response->getBody()->getContents();
            $responseData = json_decode($body, true); 
            $outputdata = array('status' => $response->getStatusCode(), 'response' =>  $responseData);
           return response()->json($outputdata);	
        } catch (\GuzzleHttp\Exception\ServerException $e) {
            $response = $e->getResponse();
            $statusCode = $response->getStatusCode();
            $body = $response->getBody()->getContents();
            $responseData = json_decode($body, true);
            $outputdata = array('status' => $response->getStatusCode(), 'response' =>  $responseData);
           return response()->json($outputdata);
        } catch (\Exception $e) {
            // Other exceptions
            echo "Error: " . $e->getMessage();
        }
    }
public function createVoice($data) {
    $data['owner_id'] = Auth::id();
     try {        
            $response = $this->client->request('POST', 'voice-generation/create-voice', [
                'headers' => [
                    'xi-api-key' => $this->apiKey, 
                    'Content-Type' => 'application/json'               
                ],
                'json' => (object)$data
            ]);
            // $response = $this->client->request('POST', 'voices/add', [
            //     'headers' => [
            //         'xi-api-key' => $this->apiKey, 
            //         'Content-Type' => 'multipart/form-data'               
            //     ],
            //     'json' => (object)$data
            // ]);
            $outputdata = array('status' => 200, 'message' => 'You have successfully created custom voice','response' => json_decode($response->getBody()->getContents(), true));
            return response()->json($outputdata);
     }catch (\GuzzleHttp\Exception\ClientException $e) {
            $response = $e->getResponse();
            $statusCode = $response->getStatusCode();
            $body = $response->getBody()->getContents();
            $responseData = json_decode($body, true); 
            $outputdata = array('status' => $response->getStatusCode(), 'response' =>  $responseData);
           return response()->json($outputdata);	
        } catch (\GuzzleHttp\Exception\ServerException $e) {
            $response = $e->getResponse();
            $statusCode = $response->getStatusCode();
            $body = $response->getBody()->getContents();
            $outputdata = array('status' => $response->getStatusCode(), 'response' =>  $responseData);
           return response()->json($outputdata);
        } catch (\Exception $e) {
            // Other exceptions
            echo "Error: " . $e->getMessage();
        }
}
    public function textToSpeech($voice_id, $data) {
         
       try {        
            $response = $this->client->request('POST', 'text-to-speech/'.$voice_id, [
                'headers' => [
                    'xi-api-key' => $this->apiKey, 
                    'Content-Type' => 'application/json'               
                ],
                'json' => $data
            ]);
           
           	$filename = Str::uuid().'.mp3';
            $rawData = $response->getBody()->getContents();	
            if (!File::exists(storage_path('app/public/speeches')))	{
                Storage::makeDirectory(public_path('storage/speeches'));
            }
            Storage::disk('speeches')->put($filename, $rawData);
        
            $speechFilelink =  asset('storage/speeches/'.$filename);							   		                 
            $urls["play_url"] = $speechFilelink;		   	
            $urls["download-file"] = $filename;	 
            $history_item_id = $response->getHeader('history-item-id'); 
            $outputdata = array('status' => 200,'responseText' => $urls, 'history_item_id'=>$history_item_id,'message' => 'You have successfully converted Text to Speech','response' => json_decode($response->getBody()->getContents(), true));
            return response()->json($outputdata);		
        }catch (\GuzzleHttp\Exception\ClientException $e) {
            $response = $e->getResponse();
            $statusCode = $response->getStatusCode();
            $body = $response->getBody()->getContents();
            $responseData = json_decode($body, true); 
            $outputdata = array('status' => $response->getStatusCode(), 'response' =>  $responseData);
           return response()->json($outputdata);	
        } catch (\GuzzleHttp\Exception\ServerException $e) {
            $response = $e->getResponse();
            $statusCode = $response->getStatusCode();
            $body = $response->getBody()->getContents();
            $outputdata = array('status' => $response->getStatusCode(), 'response' =>  $responseData);
           return response()->json($outputdata);
        } catch (\Exception $e) {
            // Other exceptions
            echo "Error: " . $e->getMessage();
        }
    }
     public function getVoice($data)
    {
        $url= 'voices';
        if(!empty($data) ) {
            $url = 'voices/'. $data['voice_id'];
        }
       
         $response = $this->client->request('GET', $url, [
            'headers' => [
                'xi-api-key' => $this->apiKey, 
                'Content-Type' => 'application/json',  
                       
            ],
            
        ]);
        return json_decode($response->getBody()->getContents(), true);
    }
    public function addVoice($data) {
         try {
            if(!empty($data)) {
                $response = $this->client->post('voices/add/'.$data['public_owner_id'].'/'.$data['voice_id'], [
                    'headers' => [
                        'xi-api-key' => $this->apiKey,
                    ],
                    
                     'json' => [
                        'new_name' => $data['new_name'],
                    ],
                ]);
                $body = $response->getBody()->getContents();
                $responseData = json_decode($body, true); 
                $outputdata = array('status' => $response->getStatusCode(), 'response' =>  $responseData,'message' => 'Successfully Added voice into collections');
                return response()->json($outputdata);	
            }
            // Handle response body...
        } catch (\GuzzleHttp\Exception\ClientException $e) {
            $response = $e->getResponse();
            $statusCode = $response->getStatusCode();
            $body = $response->getBody()->getContents();
            $responseData = json_decode($body, true); 
            $outputdata = array('status' => $response->getStatusCode(), 'response' =>  $responseData);
           return response()->json($outputdata);	
        } catch (\GuzzleHttp\Exception\ServerException $e) {
            $response = $e->getResponse();
            $statusCode = $response->getStatusCode();
            $body = $response->getBody()->getContents();
            $outputdata = array('status' => $response->getStatusCode(), 'response' =>  $responseData);
           return response()->json($outputdata);
        } catch (\Exception $e) {
            // Other exceptions
            echo "Error: " . $e->getMessage();
        }
    }
      public function editVoice($data) {
        $labels = $data['labels'];
        $labelsJson = json_encode($labels);
        
         try {
            if(!empty($data)) {
                $response = $this->client->post('voices/'.$data['voice_id'].'/edit', [
                    'headers' => [
                        'xi-api-key' => $this->apiKey,                       
                    ],
                    
            'multipart' => [
            [
                'name' => 'name',
                'contents' => $data['name']
            ],
            [
                'name' => 'description',
                'contents' => $data['description'],
            ],
            [
                'name' => 'labels',
                'contents' =>$labelsJson,
            ],
        ],
         'boundary' => uniqid(), // Set a unique boundary for multipart form data
                ]);
                $body = $response->getBody()->getContents();
                $responseData = json_decode($body, true); 
                $outputdata = array('status' => $response->getStatusCode(), 'response' =>  $responseData,'message' => 'Voice successfully updated');
                return response()->json($outputdata);	
            }
            // Handle response body...
        } catch (\GuzzleHttp\Exception\ClientException $e) {
            $response = $e->getResponse();
            $statusCode = $response->getStatusCode();
            $body = $response->getBody()->getContents();
            $responseData = json_decode($body, true); 
            $outputdata = array('status' => $response->getStatusCode(), 'response' =>  $responseData);
           return response()->json($outputdata);	
        } catch (\GuzzleHttp\Exception\ServerException $e) {
            $response = $e->getResponse();
            $statusCode = $response->getStatusCode();
            $body = $response->getBody()->getContents();
            $outputdata = array('status' => $response->getStatusCode(), 'response' =>  $responseData);
           return response()->json($outputdata);
        } catch (\Exception $e) {
            // Other exceptions
            echo "Error: " . $e->getMessage();
        }
    }
    public function removeVoice($data) {
        try {
            $response = $this->client->request('DELETE', 'voices/'.$data['voice_id'], [
                'headers' => [
                    'xi-api-key' => $this->apiKey, 
                        
                ],
                
            ]);
            $outputdata = array('status' => $response->getStatusCode(), 'response' =>  $response->getBody()->getContents(),'message' => 'Voice successfully removed from voice lab');
            return response()->json($outputdata);
        } catch (\GuzzleHttp\Exception\ClientException $e) {
            $response = $e->getResponse();
            $statusCode = $response->getStatusCode();
            $body = $response->getBody()->getContents();
            $responseData = json_decode($body, true); 
            $outputdata = array('status' => $response->getStatusCode(), 'response' =>  $responseData);
           return response()->json($outputdata);	
        } catch (\GuzzleHttp\Exception\ServerException $e) {
            $response = $e->getResponse();
            $statusCode = $response->getStatusCode();
            $body = $response->getBody()->getContents();
            $outputdata = array('status' => $response->getStatusCode(), 'response' =>  $responseData);
           return response()->json($outputdata);
        } catch (\Exception $e) {
            // Other exceptions
            echo "Error: " . $e->getMessage();
        }
}
public function voiceSetting($voice_id) {
  
        $response = $this->client->request('GET', 'voices/'.$voice_id.'/settings/', [
            'headers' => [
                 'xi-api-key' => $this->apiKey, 
                        
                ],
                
        ]);  
        return json_decode($response->getBody()->getContents(), true);  
    
      
}
public function voiceSettingUpdate($voice_id, $data) {
  try {
        $response = $this->client->request('POST', 'voices/'.$voice_id.'/settings/edit', [
            'headers' => [
                 'xi-api-key' => $this->apiKey, 
                        
                ],
            'json' => $data
                
        ]);  
        $content = json_decode($response->getBody()->getContents(), true);
       
        if($content['status'] == 'ok')  {
                 $outputdata = array('status' => '200', 'response' =>  $response->getBody()->getContents(),'message' => 'Voice setting successfully updated');
        }
        return response()->json($outputdata); 
  }  catch (\GuzzleHttp\Exception\ClientException $e) {
            $response = $e->getResponse();
            $statusCode = $response->getStatusCode();
            $body = $response->getBody()->getContents();
            $responseData = json_decode($body, true); 
            $outputdata = array('status' => $response->getStatusCode(), 'response' =>  $responseData);
           return response()->json($outputdata);	
        } catch (\GuzzleHttp\Exception\ServerException $e) {
            $response = $e->getResponse();
            $statusCode = $response->getStatusCode();
            $body = $response->getBody()->getContents();
            $outputdata = array('status' => $response->getStatusCode(), 'response' =>  $responseData);
           return response()->json($outputdata);
        } catch (\Exception $e) {
            // Other exceptions
            echo "Error: " . $e->getMessage();
        }
    
      
}
public function history($params) {
         $response = $this->client->request('GET', 'history', [
            'headers' => [
                'xi-api-key' => $this->apiKey, 
                'Content-Type' => 'application/json',  
                       
            ],
            
        ]);
        return json_decode($response->getBody()->getContents(), true);
}
public function historyAudioPlay($history_item_id) {
        $response = $this->client->request('GET', 'history/'.$history_item_id.'/audio', [
            'headers' => [
                'xi-api-key' => $this->apiKey, 
                'Content-Type' =>'audio/mpeg'
                      
            ],
            
        ]);
        $statusCode = $response->getStatusCode();
        $stream = $response->getBody();
            $audioContent = $stream->getContents();

            // Set the appropriate content type
            $contentType = $response->getHeaderLine('Content-Type');
            $contentLength = $response->getHeaderLine('Content-length');
       
            return Response::stream(function () use ($audioContent) {
                echo $audioContent;
            }, 200, ['Content-Type' => $contentType,'Content-length' => $contentLength]);
    
}
public function historyDelete($history_item_id) {
         $response = $this->client->request('DELETE', 'history/'.$history_item_id, [
            'headers' => [
                'xi-api-key' => $this->apiKey, 
                      
            ],
            
        ]);
        return json_decode($response->getBody()->getContents(), true);
}
public function historyDownload($history_item_id) {
         $response = $this->client->request('POST', 'history/download', [
            'headers' => [
                'xi-api-key' => $this->apiKey, 
                'Content-Type' => 'application/json',
            ],
             'json' => ['history_item_ids' =>$history_item_id]
            
        ]);

       return $response;
}
public function userSubscription() {
    $response = $this->client->request('GET', 'user/subscription', [
            'headers' => [
                'xi-api-key' => $this->apiKey, 
                'Content-Type' => 'application/json',
            ],
           
            
        ]);
        return json_decode($response->getBody()->getContents(), true);
}
public function getModels() {
       $response = $this->client->request('GET', 'models', [
            'headers' => [
                'xi-api-key' => $this->apiKey, 
                'Content-Type' => 'application/json',
            ],
           
            
        ]);
        return json_decode($response->getBody()->getContents(), true);
}

}