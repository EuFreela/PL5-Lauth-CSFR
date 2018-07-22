<?php
$namespace = "Lameck\Lauth\Http\Controllers";
use Lameck\Lauth\Mail\ConfirmRegister;
/**
 * FRONTEND
 */
Route::group(['namespace'=>$namespace,'prefix'=>'login','middleware' => ['web','lweb']], function(){    
    Route::group(['prefix'=>'account'], function(){        
        //Sign In
        Route::get('signin','AccountController@getSignin')->name('user.getsignin');
        Route::post('signin','AccountController@postSignin')->name('user.postsignin'); 
        //Signup
        Route::get('signup','AccountController@getSignup')->name('user.getsignup');  
        Route::post('signup','AccountController@postSignup')->name('user.postsignup');
        //Forgot
        Route::get('forgot','AccountController@getForgot')->name('user.getforgot');  
        Route::post('forgot','AccountController@postForgot')->name('user.postforgot');
        //New-key
        Route::get('new-key','AccountController@getNewKey')->name('user.getnewkey');  
        Route::post('new-key','AccountController@postNewKey')->name('user.postnewkey');
        /**
         * GETTERS TOKENS
         */
        //Confirm Token E-mail
        Route::get('confirm-token/{token}','MailController@getTokenConfirm')->middleware(['throttle:3,5']); 
        //Remember Me Token E-mail
        Route::get('forgot-token/{token}','MailController@getTokenForgot')->middleware(['throttle:3,5']);       
    });
});
/**
 * BACKEND
 */
Route::group(['namespace'=>$namespace,'prefix'=>'dashboard','middleware' => ['web','lauth']], function(){   
     
        Route::get('dash','DashboardController@getDashboard')->name('dashboard');
        Route::get('logout','AccountController@getLogout')->name('user.getlogout');
    
});
