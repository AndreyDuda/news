<?php
/**
 * Created by PhpStorm.
 * User: dudav
 * Date: 31.03.2018
 * Time: 18:39
 */

namespace App\Repositories;

use App\News;

class NewsRepository extends Repository
{
    public function __construct(News $news)
    {
        $this->model = $news;
    }
}