<?php

namespace ShangriLa\Http\Controllers;

use Illuminate\Http\Request;
use Intervention\Image\ImageServiceProvider;
use ShangriLa\Article;
use ShangriLa\smsgateway;
use Session;

class ArticleController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Article::all();
        return view('article.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('article.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
          'judul' => 'required',
          'content' => 'required'
      ]);

        $article = new Article;
        $article->judul   = $request->judul;
        $article->content = $request->content;
        $article->image   = $request->image;

        /*$input = $request->all();
        Article::create($input);*/

        if( $article->save()) {
          Session::flash('flash_message', 'Article successfully added!');

          return redirect()->route('article.edit', ['id' => $article->id ]);
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
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Article::findOrFail($id);

        return view('article.edit', compact('data'));
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
        $article = Article::findOrFail($id);

        $this->validate($request, [
            'judul' => 'required',
            'content' => 'required'
        ]);

        $input = $request->all();

        $article->fill($input)->save();

        Session::flash('flash_message', 'Member successfully Update!');

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = article::findOrFail($id);

        $data->delete();

        Session::flash('flash_message', 'Article successfully deleted!');

        return redirect()->back();
    }

    public function updatePublished(Request $request){
          $result = null;
          $article = Article::findOrFail($request->id);

          if($article == null) {
            $result = ['status'=>0,'message'=>"Data not found!"];
          } else {
            $article->isPublished   = $request->isPublished;
            if( !$article->save())
              $result = ['status'=>0,'message'=>"Failed Saved!"];
            else
              $result = ['status'=>1,'message'=>"OK!"];
        }
        return $result;
    }
}
