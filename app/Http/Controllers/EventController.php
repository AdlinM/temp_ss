<?php

namespace ShangriLa\Http\Controllers;

use Illuminate\Http\Request;
use ShangriLa\Event;
use ShangriLa\Member;
use ShangriLa\smsgateway;
use Session;

class EventController extends Controller
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
        //
        $datas = Event::all();

        return view('event.index', compact('datas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('event.create');
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
          'nama' => 'required',
          'kategori' => 'required',
          'waktuAcara' => 'required'
        ]);

        $event = new Event;
        $event->nama=$request->nama;
        $event->waktuAcara=$request->waktuAcara;
        $event->kategori=$request->kategori;
        $event->deskripsi=$request->deskripsi;
        $event->save();

        Session::flash('flash_message', 'Event successfully added!');

        return redirect("/event");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data =  event::findOrFail($id);

        $member = Member::all();

        return view('event.show', compact('data'))->with('member',$member);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = event::findOrFail($id);

        return view('event.edit', compact('data'));
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
        $data = event::findOrFail($id);

          $this->validate($request, [
              'nama' => 'required',
              'kategori' => 'required',
              'waktuAcara' => 'required'
          ]);

          $input = $request->all();

          $data->fill($input)->save();

          Session::flash('flash_message', 'Event successfully Update!');

          //$data = Member::all();
          //return view('member.index', compact('data'));
          return view('event.edit', compact('data'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = event::findOrFail($id);

        $data->delete();

        Session::flash('flash_message', 'Event successfully deleted!');

        return redirect()->back();
    }

    /**
     * Show the eventCalendar.
     *
     * @return \Illuminate\Http\Response
     */
    public function eventCalendar()
    {
        return view('/event/eventCalendar');
    }
}
