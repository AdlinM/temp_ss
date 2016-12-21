<?php

namespace ShangriLa\Http\Controllers;

use Illuminate\Http\Request;
use ShangriLa\smsgateway;
use Session;

class MessageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('message.index');
    }


    public function sendBroadcast(Request $request)
    {
      Session::flash('flash_message', 'success to send! see status in page sms history.');
      /*$txPhone = "";
      foreach($request->phoneNumber as $p){
        $txPhone .= $p.",";
      }
      return trim($txPhone, ",");*/

      $smsGateway = new SmsGateway('adlin.asus@gmail.com', 'smsgateway321');

      $deviceID = 35594;
      $numbers = $request->phoneNumber;
      $message = $request->message;

      $options = [];/*
      'send_at' => strtotime('+10 minutes'), // Send the message in 10 minutes
      'expires_at' => strtotime('+1 hour') // Cancel the message in 1 hour if the message is not yet sent
    ];*/

      //Please note options is no required and can be left out
      $result = $smsGateway->sendMessageToManyNumbers($request->phoneNumber, $message, $deviceID);

      $smsGateway = new SmsGateway('adlin.asus@gmail.com', 'smsgateway321');
      return redirect()->back();
    }
}
