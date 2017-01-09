<?php

namespace ShangriLa\Http\Controllers;

use Illuminate\Http\Request;
use ShangriLa\smsgateway;
use ShangriLa\Member;
use Session;

class MessageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($page = 1)
    {
      $smsGateway = new SmsGateway();

      $data = $smsGateway->getMessages($page);
      $resData = $data['response']['result'];

      $member = Member::all();
      //var_dump($member);
      //die;

      $result = [];
      $index = 0;
      for ($i = 0;$i<sizeof($member);$i++)
      {
        for ($j = $i;$j<sizeof($resData);$j++)
        {
            if($resData[$j]['contact']['number'] == $member[$i]->phone) {
              $result[$index]['name'] = $member[$i]->firstName;
              $result[$index]['sent_at'] = $resData[$j]['sent_at'];
              $result[$index]['status'] = $resData[$j]['status'];
              $result[$index]['message'] = $resData[$j]['message'];
              $index++;
            }
        }
      }

      return view('message.index', compact('result'));
    }

    public function sendBroadcast(Request $request)
    {
      Session::flash('flash_message', 'success to send! see status in page sms history.');

      $smsGateway = new SmsGateway();

      $deviceID = 35594;
      $numbers = $request->phoneNumber;
      $message = $request->message;

      $options = [];/*
      'send_at' => strtotime('+10 minutes'), // Send the message in 10 minutes
      'expires_at' => strtotime('+1 hour') // Cancel the message in 1 hour if the message is not yet sent
    ];*/

      //Please note options is no required and can be left out
      $result = $smsGateway->sendMessageToManyNumbers($request->phoneNumber, $message, $deviceID);

      return redirect()->back();
    }
}
