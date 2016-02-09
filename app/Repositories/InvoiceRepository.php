<?php

namespace App\Repositories;
use App\Invoices;

/**
 * Class InvoiceRepository
 * @package App\Repositories
 */
class InvoiceRepository extends Repository {

    /**
     * @return mixed
     */
    function model() {
        return Invoices::class;
    }
}