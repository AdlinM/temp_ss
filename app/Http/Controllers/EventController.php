<?php

namespace ShangriLa\Http\Controllers;

use Illuminate\Http\Request;

class EventController extends Controller
{
  /**
   * Show the application dashboard.
   *
   * @return \Illuminate\Http\Response
   */
  public function eventCalendar()
  {
      return view('/event/eventCalendar');
  }
}
