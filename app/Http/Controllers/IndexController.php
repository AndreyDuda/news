<?php

namespace App\Http\Controllers;


use App\Repositories\CommentRepository;
use App\Repositories\UserRepository;
use Illuminate\Http\Request;
use App\Repositories\NewsRepository;

class IndexController extends SiteController
{
    public function __construct(NewsRepository $news_rep, UserRepository $user_rep, CommentRepository $comment_rep)
    {

        $this->user_rep = $user_rep;
        $this->news_rep = $news_rep;
        $this->comment_rep = $comment_rep;
        $this->template = env('THEME') . '.index';
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
            $news = $this->news_rep->get();
            $content = view(env('THEME') . '.content')->with('news', $news)->render();
            $this->vars = array_add($this->vars, 'content', $content);

            return $this->renderOutput();
    }

    public function home()
    {
        $user_id  = \Auth::user()->id;
        $news = $this->news_rep->getUser($user_id );
        $content = view(env('THEME') . '.home')->with('news', $news)->render();
        $this->vars = array_add($this->vars, 'content', $content);

        return $this->renderOutput();

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

       //auth()->guard()->check())/
        $user_id = \Auth::user()->id;
            if($request->isMethod('post')){
                $input = $request->except('_token');
                $input = array_add($input, 'user_id', $user_id );
                $validator = $this->news_rep->validator($input);
                if($validator->fails()){

                    return redirect()->route('add')->withErrors($validator)->withInput();
                }else{
                    $this->news_rep->add($input);
                    return redirect()->route('add')->with('status', 'Новость добавлена');
                }


                //return redirect()->intended(route('oneNews', ['id' => 1]));
            }else{
                $content = view(env('THEME') . '.homeAdd')->render();
                $this->vars = array_add($this->vars, 'content', $content);

                return $this->renderOutput();

            }
            //return redirect()->intended('login');
    }

    public function addComment(Request $request)
    {
        $user_id = \Auth::user()->id;

        if($request->isMethod('post')){
            $input = $request->except('_token');
            $input = array_add($input, 'user_id', $user_id );
            $validator = $this->comment_rep->validator($input);
/*dd($input);*/
            if($validator->fails()){
                return redirect()->route('oneNews', ['id' => $request->news_id])->withErrors($validator)->withInput();
            }else{
                $this->comment_rep->add($input);
                return redirect()->route('oneNews', ['id' => $request->news_id])->with('status', 'Новость добавлена');
            }
        }else{
            return redirect()->route('oneNews', ['id' => $request->news_id]);

        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $news = $this->news_rep->getOne($id);

        $content = view(env('THEME') . '.content_one')->with(['news'=> $news])->render();
        $this->vars = array_add($this->vars, 'content', $content);

        return $this->renderOutput();
    }

    public function user()
    {
        $id = \Auth::user()->id;
        $user = $this->user_rep->getOne($id);

        $content = view(env('THEME') . '.user')->with('user', $user)->render();
        $this->vars = array_add($this->vars, 'content', $content);

        return $this->renderOutput();
    }

    public function folover()
    {
        print_r('asdasdas');
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

    }

    public function getNews()
    {
        $news = $this->news_rep->get();

        return $news;
    }
}
