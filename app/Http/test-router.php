<?php

Route::group(['middleware' => 'web','pjax'], function () {

    Route::get('/testSendMail','ContactEmailController@sendEmail');

    Route::get('/testSendMail2',function(){
       dispatch(new \App\Jobs\SendSubscriptionEmail());

    });

});