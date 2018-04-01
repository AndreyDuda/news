<?php
/**
 * Created by PhpStorm.
 * User: dudav
 * Date: 31.03.2018
 * Time: 21:13
 */

namespace App\Repositories;


use App\Menu;

class MenusRepository extends Repository
{
    public function __construct(Menu $menu)
    {
        $this->model = $menu;
    }
}