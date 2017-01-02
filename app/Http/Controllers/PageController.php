<?php

namespace ShangriLa\Http\Controllers;

use Illuminate\Http\Request;
use DB;
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
      return view('welcome', ['ActCount' => $ActCount]);
   }
}
