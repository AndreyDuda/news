<?php
/**
 * Created by PhpStorm.
 * User: dudav
 * Date: 31.03.2018
 * Time: 18:39
 */

namespace App\Repositories;

use App\News;
use Validator;

class NewsRepository extends Repository
{
    public function __construct(News $news)
    {
        $this->model = $news;
    }
    public function validator($input)
    {
        $validator = Validator::make($input, [
            'title'   => 'required|max:120',
            'desc'    => 'required|min:1'
        ]);

        return $validator;
    }

    public function getUser($id)
    {
        $builder = $this->model->where('user_id', $id);

        return $builder->get();

    }
}