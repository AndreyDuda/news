<?php
/**
 * Created by PhpStorm.
 * User: dudav
 * Date: 01.04.2018
 * Time: 21:29
 */

namespace App\Repositories;

use App\Comment;
use Validator;

class CommentRepository extends Repository
{
    public function __construct(Comment $comment)
    {
        $this->model = $comment;
    }

    public function getNews($id)
    {
        $builder = $this->model->where('news_id', $id);

        return $builder->get();

    }
    public function validator($input)
    {
        $validator = Validator::make($input, [
            'text'   => 'required|min:1',
        ]);

        return $validator;
    }

}