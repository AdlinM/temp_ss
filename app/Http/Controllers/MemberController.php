<?php

namespace ShangriLa\Http\Controllers;

use Illuminate\Http\Request;
use ShangriLa\Member;
use ShangriLa\smsgateway;
use Session;

class MemberController extends Controller
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
        // declare var array
        //$data = array();

        // get data from db
        $data = Member::all();

        /*
        // get data from smsGateway
        $smsGateway = new SmsGateway('adlin.asus@gmail.com', 'smsgateway321');
        $page = 1;
        $result = $smsGateway->getContacts($page);

        //return $result;

        // do selection (inner join data by number)
        if($result['response']['success'] == true) {
          $dataContact = $result['response']['result']['data'];
          for($i=0;$i<sizeof($dataContact);$i++)
          {
            for($j=$i;$j<sizeof($member);$j++){
              if($dataContact[$i]['number'] == $member[$j]->phone)
                $data[] = $member[$j];
            }
          }
        }
        */

        //return selection to list
        return view('member.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('/member/create');
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
          'firstName' => 'required',
          'email' => 'required',
          'jurusan' => 'required',
          'phone' => 'required',
          'nim' => 'required|min:9|max:9|unique:members',
          'bio' => 'max:190'
      ]);

      //$smsGateway = new SmsGateway('adlin.asus@gmail.com', 'smsgateway321');
      //$result = $smsGateway->createContact($request['firstName'] . " " . $request ['lastName'] , $request['phone']);

      // if success save to smsContact, add to dbase
      //if($result['response']['success'] == true) {
      //$request->contactId = $result['response']['result']['user_id'];
        $input = $request->all();
        Member::create($input);
        Session::flash('flash_message', 'Member successfully added!');
      //} else {
      //  Session::flash('flash_message_fail', 'Member unsuccessfully added. Connection Error Occured.');

      //  return redirect()->route('member.create')->withInput();
      //}

      return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data =  Member::findOrFail($id);
        return view('member.show', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Member::findOrFail($id);

        return view('member.edit', compact('data'));
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
      $member = Member::findOrFail($id);

      $this->validate($request, [
          'firstName' => 'required',
          'email' => 'required',
          'jurusan' => 'required',
          'nim' => 'required|min:9|max:9',
          'phone' => 'required',
          'bio' => 'max:190'
      ]);

      $input = $request->all();

      $member->fill($input)->save();

      Session::flash('flash_message', 'Member successfully Update!');

      //$data = Member::all();
      //return view('member.index', compact('data'));
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
      $data = Member::findOrFail($id);

      $data->delete();

      Session::flash('flash_message', 'Member successfully deleted!');

      return redirect()->route('member.index');
    }
}
