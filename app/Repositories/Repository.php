<?php
/**
 * Created by PhpStorm.
 * User: dudav
 * Date: 31.03.2018
 * Time: 18:39
 */

namespace App\Repositories;


abstract class Repository
{
    protected $model = false;

    public function get()
    {
        $builder = $this->model->select('*');

        return $builder;

    }
}