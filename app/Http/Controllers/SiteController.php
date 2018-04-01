<?php

namespace App\Http\Controllers;

use App\Repositories\MenusRepository;
use Illuminate\Http\Request;
use App\Repositories\NewsRepository;

class SiteController extends Controller
{
    protected $news_rep;
    protected $menu_rep;

    protected $vars = array();
    protected $template;

    public function __construct(MenusRepository $menu_rep)
    {
        $this->menu_rep = $menu_rep;
    }

    public function renderOutput()
    {
        $menus = $this->getMenu();
        $menus = view(env('THEME') . '.menu')->render();
        $this->vars = array_add($this->vars, 'menus', $menus);


        return view($this->template)->with($this->vars);
    }

    public function getMenu()
    {
        $menu = $this->menu_rep->get();
    }


}
