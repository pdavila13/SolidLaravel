<?php
/**
 * Created by PhpStorm.
 * User: pdavila
 * Date: 9/02/16
 * Time: 11:23
 */

namespace App\Http;


class Flash {
    public function message($message) {
        echo "Missatgee";

        //session->flash('flash_message', $message);
    }
}