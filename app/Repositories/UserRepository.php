<?php
/**
 * Created by PhpStorm.
 * User: dudav
 * Date: 01.04.2018
 * Time: 20:06
 */

namespace App\Repositories;

use App\User;

class UserRepository extends Repository
{
    public function __construct(User $user)
    {
        $this->model = $user;
    }

}