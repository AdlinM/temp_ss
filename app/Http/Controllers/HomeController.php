<?php

namespace ShangriLa\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use ShangriLa\smsgateway;
use ShangriLa\Member;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($page = 1)
    {
      //get article list
      $article = DB::table('articles')->select('id', 'judul', 'created_at')->get();


      //get message history list
      $smsGateway = new SmsGateway();
      $data = $smsGateway->getMessages($page);
      $resData = $data['response']['result'];

      $member = Member::all();

      $result = [];
      $index = 0;
      for ($i = 0;$i<sizeof($member);$i++)
      {
        for ($j = $i;$j<sizeof($resData);$j++)
        {
            if($resData[$j]['contact']['number'] == $member[$i]->phone) {
              $result[$index]['name'] = $member[$i]->firstName . " " . $member[$i]->lastName;
              $result[$index]['sent_at'] = $resData[$j]['sent_at'];
              $result[$index]['status'] = $resData[$j]['status'];
              $result[$index]['message'] = $resData[$j]['message'];
              $index++;
            }
        }
      }

      return view('home',['article' => $article, 'message'=>$result]);
    }


    public function profile()
    {
      return view('profile');
    }
}
