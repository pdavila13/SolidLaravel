<?php
/**
 * Created by PhpStorm.
 * User: pdavila
 * Date: 9/02/16
 * Time: 10:57
 */

namespace App\Repositories;

use App\User;


class UserRepository extends Repository {

    /**
     * @param array $columns
     * @return mixed
     */
    function model() {
        return User::class;
    }
}