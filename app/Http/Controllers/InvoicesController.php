<?php

namespace App\Http\Controllers;

use App\Repositories\InvoiceRepository;

use App\Http\Requests;
use App\Repositories\RepositoryInterface;
use Illuminate\Support\Facades\Auth;

/**
 * Class InvoicesController
 * @package App\Http\Controllers
 */
class InvoicesController extends Controller {

    protected $repo;

    /**
     * InvoicesController constructor.
     * @param $repo
     *
     * DEPENDENCY INJECTION
     */
    public function __construct(RepositoryInterface $repo) {
        $this->repo = $repo;
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index() {

        if ( !Auth::check() ) {
            return "Forbidden!";
        }

        $invoices = $this->transform($this->repo->all());

//      return view('invoices');
        return view('invoices',compact('invoices'));
//      $data['invoices'] = $invoices;
//      return view('invoices',$data);
    }

    private function transform($database_invoices) {
        //Nothing here -> no transformations example
        return $database_invoices;
    }
}
