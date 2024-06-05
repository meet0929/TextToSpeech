<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SubscriberController;
use App\Http\Controllers\AdminSubscriberController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\JobApplicationController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Auth::routes(['verify' => true]);




Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('home', [App\Http\Controllers\LinkController::class, 'index']);
Route::get('/about', [App\Http\Controllers\HomeController::class, 'aboutus'])->name('aboutus');
Route::get('/pricing', [App\Http\Controllers\HomeController::class, 'pricing'])->name('pricing');
Route::get('/blog', [App\Http\Controllers\HomeController::class, 'blog'])->name('blog');
Route::get('/blog-view', [App\Http\Controllers\HomeController::class, 'blogview'])->name('blog-view');

Route::get('/contact', [App\Http\Controllers\HomeController::class, 'contact'])->name('contact');
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');


Route::get('/terms', [App\Http\Controllers\HomeController::class, 'terms'])->name('terms');
Route::get('/privacy', [App\Http\Controllers\HomeController::class, 'policy'])->name('policy');
Route::get('/dmca-policy', [App\Http\Controllers\HomeController::class, 'dmcapolicy'])->name('dmca-policy');
Route::get('/refund', [App\Http\Controllers\HomeController::class, 'refundpolicy'])->name('refund-policy');
Route::get('/affiliates', [App\Http\Controllers\HomeController::class, 'affiliate'])->name('affiliate');
// career module
Route::get('/careers', [App\Http\Controllers\HomeController::class, 'career'])->name('career');
Route::post('/career/apply', [JobApplicationController::class, 'apply'])->name('career.apply');


Route::patch('/register', [App\Http\Controllers\Auth\RegisterController::class, 'update'])->name('user.update');
Route::delete('/delete', [App\Http\Controllers\Auth\RegisterController::class, 'delete'])->name('user.delete');
Route::get('/confirm/{id}', [App\Http\Controllers\Auth\RegisterController::class, 'confirm'])->name('user.confirm');

Route::get('/google/redirect', [App\Http\Controllers\GoogleLoginController::class, 'redirectToGoogle'])->name('google.redirect');
Route::get('/google/callback', [App\Http\Controllers\GoogleLoginController::class, 'handleGoogleCallback'])->name('google.callback');

Route::get('/auth/facebook', [App\Http\Controllers\FacebookController::class, 'redirectToFacebook'])->name('auth.facebook');
Route::get('/auth/facebook/callback', [App\Http\Controllers\FacebookController::class, 'handleFacebookCallback'])->name('auth.facebooklogincallback');

Route::middleware(['auth'])->group(function () {


    Route::get('/subscription', [App\Http\Controllers\SubscriptionController::class, 'index'])->name('user.subscription');
    Route::post('/subscription/create', [App\Http\Controllers\SubscriptionController::class, 'store'])->name('user.subscription.store');
    Route::post('/charge', [App\Http\Controllers\PaymentController::class, 'createCharge'])->name('charge.create');
    Route::get('/payment/{upgrade?}', [App\Http\Controllers\PaymentController::class, 'index'])->name('user.payment');
    Route::get('/stripepayment', [App\Http\Controllers\PaymentController::class, 'payment'])->name('stripe.payment');
    Route::get('/success', [App\Http\Controllers\PaymentController::class, 'success'])->name('payment.success');
    Route::get('/cancel', [App\Http\Controllers\PaymentController::class, 'cancel'])->name('payment.cancel');
    Route::post('/cancel-subscription', [App\Http\Controllers\SubscriptionController::class, 'cancelSubscription'])->name('user.cancelsubscription');

    Route::get('/voice-lab', [App\Http\Controllers\SpeechController::class, 'voiceLab'])->name('voice-lab');
    Route::get('/speech-synthesis', [App\Http\Controllers\SpeechController::class, 'index'])->name('speech-synthesis');
    Route::get('/get-voice-data', [App\Http\Controllers\SpeechController::class, 'getVoiceData'])->name('get-voice-data');
    Route::post('/voice-generated', [App\Http\Controllers\SpeechController::class, 'VoiceGenerated'])->name('voice.generated');
    Route::post('/text-to-speech/{voice_id}', [App\Http\Controllers\SpeechController::class, 'textToSpeech'])->name('text-to-speech');
    Route::post('/create-voice', [App\Http\Controllers\SpeechController::class, 'createVoice'])->name('create-voice');

    Route::get('/get-voice', [App\Http\Controllers\SpeechController::class, 'getVoice'])->name('get-voice');
    Route::post('/add-voice', [App\Http\Controllers\SpeechController::class, 'addVoice'])->name('add-voice');
    Route::post('/edit-voice', [App\Http\Controllers\SpeechController::class, 'editVoice'])->name('edit-voice');
    Route::post('/remove-voice', [App\Http\Controllers\SpeechController::class, 'removeVoice'])->name('remove-voice');

    Route::get('/history', [App\Http\Controllers\SpeechController::class, 'history'])->name('history');
    Route::get('/history/{id}/delete', [App\Http\Controllers\SpeechController::class, 'historyDelete'])->name('history.delete');
    Route::post('/history/action', [App\Http\Controllers\SpeechController::class, 'historyAction'])->name('history.action');
    Route::post('/history/download', [App\Http\Controllers\SpeechController::class, 'historyDownload'])->name('history.download');
    Route::get('/history/{history_item_id}/audio', [App\Http\Controllers\SpeechController::class, 'historyAudioPlay'])->name('history.audio.play');
    Route::get('/get_models', [App\Http\Controllers\SpeechController::class, 'getModels'])->name('get_models');

    Route::get('/voice_setting/{voice_id}', [App\Http\Controllers\SpeechController::class, 'voiceSetting'])->name('voice_setting');
    Route::post('/voices_setting_update/{voice_id}', [App\Http\Controllers\SpeechController::class, 'voiceSettingUpdate'])->name('voices_setting_update');

    Route::get('/eleven/user/subscription', [App\Http\Controllers\SpeechController::class, 'elevenuserSubscription'])->name('elevenusersubscription');
    Route::get('/user/subscription', [App\Http\Controllers\SpeechController::class, 'userSubscription'])->name('usersubscription');
    Route::post('/user/subscription/update', [App\Http\Controllers\SpeechController::class, 'userSubscriptionUpdate'])->name('user-subscription-update'); 

    Route::post('/voice/favorite/add', [App\Http\Controllers\SpeechController::class, 'voiceaddtofav'])->name('voice-favorite-add'); 
    Route::post('/voice/favorite/remove', [App\Http\Controllers\SpeechController::class, 'voiceremovefromfav'])->name('voice-favorite-remove');
    Route::get('/voice/favorite/get', [App\Http\Controllers\SpeechController::class, 'getFavVoice'])->name('get-fav-voice'); 

    Route::post('/voice/history/add', [App\Http\Controllers\SpeechController::class, 'historystore'])->name('voice-history-add'); 
    Route::get('/voice/history/get', [App\Http\Controllers\SpeechController::class, 'historyget'])->name('voice-history-get'); 


    Route::post('/customvoice/add', [App\Http\Controllers\SpeechController::class, 'customvoicestore'])->name('custom-voice-add'); 
    Route::get('/customvoice/get', [App\Http\Controllers\SpeechController::class, 'customvoices'])->name('custom-voice-get'); 
    // Subscribe 

    Route::post('/subscriber', [SubscriberController::class, 'index'])->name('subscribe');

    // Route::get('/subscriber/verify/{token}/{email}', [SubscriberController::class, 'verify'])->name('subscriber_verify');

    // // Message to All Subscriber

    // Route::get('/subscriber/all', [AdminSubscriberController::class, 'show_all'])->name('admin_subscribers');
    // Route::get('/subscriber/send-email', [AdminSubscriberController::class, 'send_email'])->name('subscriber_send_email');
    // Route::post('/admin/subscriber/send-email-submit', [AdminSubscriberController::class, 'send_email_submit'])->name('subscriber_send_email_submit');






    Route::get('/send-mail', [App\Http\Controllers\MailController::class, 'sendEmail']);
    Route::get('/sendmail', [ContactController::class, 'sendEmail']);


    //-------------------------------Admin Portal
    Route::get('/admin/price/edit/{id}', [App\Http\Controllers\Admin\PricingController::class, 'edit'])->name('admin.edit.price');

    Route::post('/admin/price/update/{id}', [App\Http\Controllers\Admin\PricingController::class, 'update'])->name('admin.update.price');
});