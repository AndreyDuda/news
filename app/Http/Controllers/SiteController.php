<?php

namespace App\Http\Controllers;

use App\Repositories\MenusRepository;
use Illuminate\Http\Request;
use App\Repositories\NewsRepository;

class SiteController extends Controller
{
    protected $news_rep;
    protected $menu_rep;
    protected $user_rep;
    protected $comment_rep;

    protected $vars = array();
    protected $template;

    public function __construct()
    {

    }

    public function renderOutput()
    {
        $menus = view(env('THEME') . '.menu')->render();
        $this->vars = array_add($this->vars, 'menus', $menus);


        return view($this->template)->with($this->vars);
    }




}
