<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Repositories\CommentRepository;
use App\Repositories\UserRepository;
use App\Repositories\NewsRepository;
use App\Http\Resources\Resource as NewsResource;

class ResourceController extends SiteController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct(NewsRepository $news_rep, UserRepository $user_rep, CommentRepository $comment_rep)
    {

        $this->user_rep = $user_rep;
        $this->news_rep = $news_rep;
        $this->comment_rep = $comment_rep;

    }

    public function index()
    {
        $news = $this->news_rep->get();

        return NewsResource::collection($news);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $news = $this->news_rep->getOne($id);

        return new NewsResource($news);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function getNews()
    {
        $news = $this->news_rep->get();

        return $news;
    }
}
