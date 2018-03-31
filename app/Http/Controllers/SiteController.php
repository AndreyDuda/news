<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\NewsRepository;

class SiteController extends Controller
{
    protected $news_rep;

    protected $vars;
    protected $template;

    public function __construct()
    {

    }

    public function renderOutput()
    {

        return view($this->template)->with($this->vars);
    }

}
