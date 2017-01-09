<?php

namespace ShangriLa\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use ShangriLa\Article;
use App\Quotation;

class PageController extends Controller
{
  /**
   * Show the application dashboard.
   *
   * @return \Illuminate\Http\Response
   */
   public function index()
   {
      $ActCount = DB::select("call sp_ActivityCount()");

      $article =  DB::table('articles')->where('isPublished', '=', 1)->get();

      return view('welcome', ['ActCount' => $ActCount, 'article' => $article, 'i'=>1]);
   }

   public function articlepage($id){
     $data = Article::findOrFail($id);

     if($data==null) {
      $data = new Article;
      $data->judul = "Not Found";
      $data->content = "";
    }

     return view('articlepage',['data'=>$data]);
   }

}
