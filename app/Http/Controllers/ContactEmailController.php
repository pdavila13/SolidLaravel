<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class ContactEmailController extends Controller {
    //
    public function send (Request $request) {
        //dd(Input::All());

        $request->session()->flash('notifications', 'All OK');

        return redirect()->route('welcome');
    }
}
