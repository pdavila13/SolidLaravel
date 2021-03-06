<?php

namespace App\Http\Controllers;

use App\Flash;
use App\Jobs\SendSubscriptionEmail;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class ContactEmailController extends Controller {
    //
    public function send (Request $request) {
        //dd(Input::All());

        $this->sendEmail();

        $request->session()->flash('flash_message', 'All OK');

        //Flash::message('Email sent PP');
        return redirect()->route('welcome');
    }

    public function sendEmail(){
        $this->user->email = "info@paolodavila.com";
        $this->dispatch(new SendSubscriptionEmail());
        echo "Done";
    }
}
