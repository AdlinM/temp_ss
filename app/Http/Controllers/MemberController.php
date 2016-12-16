<?php

namespace ShangriLa\Http\Controllers;

use Illuminate\Http\Request;
use ShangriLa\Member;
use ShangriLa\smsgateway;

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
        $data = Member::all();

        return view('member.index', compact('data'));


        /*$smsGateway = new SmsGateway('adlin.asus@gmail.com', 'smsgateway321');
        $page = 1;
        $result = $smsGateway->getContacts($page);*/
        //return $result;
        //return view('/member/index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('/member/memberForm');


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
          'phone' => 'required'
      ]);

        $input = $request->all();

        Member::create($input);

        return redirect()->back();

        Session::flash('flash_message', 'Member successfully added!');


        /*$input = new Member;
        $input->firstName = $request->firstName;
        $input->lastName = $request->lastName;
        $input->email = $request->email;
        $input->bio = $request->bio;
        $input->jurusan = $request->jurusan;
        $input->address = $request->address;
        $input->DOB = $request->DOB;
        $input->POB = $request->POB;
        $input->phone = $request->phone;
        $input->save();*/
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

        //$data = Member::select('select * from member where id = :id', ['id' => $id]);
        return view('member.memberForm', compact('data'));
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
}
