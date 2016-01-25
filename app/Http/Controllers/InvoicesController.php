<?php

namespace App\Http\Controllers;

use App\Invoices;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

/**
 * Class InvoicesController
 * @package App\Http\Controllers
 */
class InvoicesController extends Controller {

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index() {

        if ( !Auth::check() ) {
            return "Forbidden!";
        }

        $database_invoices = $this->getAllInvoicesFromDatabase();

        $invoices = $this->transform($database_invoices);

//      return view('invoices');
        return view('invoices',compact('invoices'));

//      $data['invoices'] = $invoices;
//      return view('invoices',$data);
    }

    /**
     * @return mixed
     */
    private function getAllInvoicesFromDatabase() {
        return Invoices::all();
    }

    /**
     * @param $database_invoices
     * @return mixed
     */
    private function transform($database_invoices) {
        //Nothing here -> no transformations example
        return $database_invoices;
    }
}
