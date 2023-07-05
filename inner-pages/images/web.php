<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/* This route is for lumenave training customer invitation
*
* ******   PLEAse DO NOT REMOVE!!!

*/

Route::get('training/registration', function () {
    return view('registration/index');
});

Route::get('registration/cisco', function () {
    return view('registration.cisco');
});
Route::get('registration/ptalabguide', function () {
    return view('registration.ptalabguide');
});


Route::get('registration/feedback', function () {
    return view('registration.feedback');
});


Route::get('registration/checkpoint', function () {
    return view('registration.checkpoint');
});

Route::get('registration/cyberark', function () {
    return view('registration.cyberark');
});

Route::get('registration/rapid7', function () {
    return view('registration.rapid7');
});

Route::get('registration/complete', function () {
    return view('registration.registration-complete');
});
Route::get('registration/feedbackcomplete', function () {
    return view('registration.feedback-complete');
});


//Training Feedback Route
Route::get('training/feedback', function () {
    return view('registration/feedback');
});

Route::get('training-comptprg.html', function () {
    return view('seat.training-reg');
});

// Contact Form
Route::post('/submit-form', 'ContactFormController@submitForm');

// Registration Form
Route::post('sendReg', 'ProgController@sendRegInfo');

// Feedback Form
Route::post('sendfeed', 'ProgControllerMail@sendFeedInfo');

//END TRAINING REGISTRATION ROUTE
Route::get('/', function () {
    // return view('home');
    return view('home');
});

//route for solutions
Route::get('solutions', function () {
    return view('solutions/index');
});

Route::get('solutions/information-security', function () {
    return view('solutions/information-security');
});

Route::get('solutions/cloud-security', function () {
    return view('solutions/cloud-security');
});

Route::get('solutions/data-protection', function () {
    return view('solutions/data-protection');
});

Route::get('solutions/endpoint-security', function () {
    return view('solutions/endpoint-security');
});

Route::get('solutions/network-security', function (){
    return view('solutions/network-security');
});

Route::get('solutions/information-availability', function (){
    return view('solutions/information-availability');
});

Route::get('solutions/backup-and-recovery', function (){
    return view('solutions/backup-and-recovery');
});

Route::get('solutions/business-continuity', function (){
    return view('solutions/business-continuity');
});

Route::get('solutions/information-governance', function (){
    return view('solutions/information-governance');
});

Route::get('solutions/information-management', function (){
    return view('solutions/information-management');
});

Route::get('solutions/enterprise-management', function (){
    return view('solutions/enterprise-management');
});

Route::get('solutions/security-management', function (){
    return view('solutions/security-management');
});

Route::get('solutions/information-systems', function (){
    return view('solutions/information-systems');
});

Route::get('solutions/infrastructure-solutions', function (){
    return view('solutions/infrastructure-solutions');
});

Route::get('solutions/networking-solutions', function (){
    return view('solutions/networking-solutions');
});

Route::get('solutions/randtronics', function (){
    return view('solutions/randtronics');
});

Route::get('solutions/enterprise-system-solutions', function (){
    return view('solutions/enterprise-system-solutions');
});


//route group for services
Route::group(['prefix' => 'services'], function (){

    Route::get('/', function (){
        return view('services/index');
    });

    Route::get('professional-services', function(){
        return view('services/professional-services');
    });

    Route::get('advisory-and-consulting-services', function () {
        return view('services/index');
    });

    Route::get('architectural-design-services', function () {
        return view('services/index');
    });

    Route::get('implementation-services', function () {
        return view('services/index');
    });

    Route::get('optimization-services', function () {
        return view('services/index');
    });

    Route::get('outsourcing-and-managed', function () {
        return view('services/outsourcing-and-managed');
    });

    Route::get('managed-outsourcing-services', function () {
        return view('services/managed-outsourcing-services');
    });

    Route::get('managed-security-services', function (){
        return view('services/managed-security-services');
    });

    Route::get('it-financing', function (){
        return view('services/it-financing');
    });

    Route::get('lumenave-finance-and-capital', function (){
        return view('services/index');
    });

    Route::get('lumenave-insure', function (){
        return view('services/index');
    });

    Route::get('bandwidth-provisioning', function (){
        return view('services/bandwidth-provisioning');
    });

    Route::get('private-network-connection', function (){
        return view('services/private-network-connection');
    });

    Route::get('mobile-connectivity-services', function (){
        return view('services/mobile-connectivity-services');
    });

    Route::get('internet-services', function (){
        return view('services/internet-services');
    });

});

//route group for support
Route::group(['prefix' => 'support'], function () {

    Route::get('/', function () {
        return view('support/index');
    });

    Route::get('support-options', function () {
        return view('support/support-options');
    });

    Route::get('support-center', function () {
        return view('support/support-center');
    });

    Route::get('supported-solutions', function () {
        return view('support/supported-solutions');
    });

});

Route::get('contact', function () {
    return view('support/contact-us');
});

//route group for training
Route::group(['prefix' => 'training'], function () {

    Route::get('/', function () {
        return view('training/index');
    });

    Route::get('certification-training', function () {
        return view('training/certification-training');
    });

    Route::get('customized-training', function () {
        return view('training/customized-training');
    });

    Route::get('training-formats', function () {
        return view('training/training-formats');
    });

});

//route group for products
Route::group(['prefix' => 'products'], function () {

    Route::get('/', function () {
        return view('products/index');
    });

    Route::get('servers', function () {
        return view('products/servers');
    });

    Route::get('desktops', function () {
        return view('products/desktops');
    });

    Route::get('storage', function () {
        return view('products/storage');
    });

    Route::get('peripherals', function () {
        return view('products/peripherals');
    });

});

Route::get('about', function (){
    return view('about-us');
});

Route::get('livechat/bitrix', function (){
    if(isset(request()->expires_in)){
        return response()->json([
            '1st Expire in'=> request()->expires_in
        ]);
    }
    elseif(isset(request()->code)){
    redirect()->away("http://lumenave.bitrix24.com/oauth/token/?client_id=local.5d9f2b141bac85.75348525&grant_type=authorization_code&client_secret=amMLRlvIGelnYqK1cM8JPJwwtRNCUe3C8WR7vYBVU3832YO5gQ&redirect_uri=app_URL&code=".request()->code."&scope=user,task");

     return response()->json([
        '2nd Expire in'=> request()->expires_in
    ]);

//'https://crowddiscountnetwork.com/lum'
    }
    return $code.' Bitrix24 for Lumenave'; //redirect()->back(); //view('inners.index');
 });

//Error 404 Not found page
Route::get('not-found', function (){
 return view('error');
});


 
 