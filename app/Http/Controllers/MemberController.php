<?php

namespace ShangriLa\Http\Controllers;

use Illuminate\Http\Request;

class MemberController extends Controller
{
  public function __construct()
  {
      $this->middleware('auth');
  }

  /**
   * Show the member list.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
      return view('/member/index');
  }

  /**
   * Show the member list.
   *
   * @return \Illuminate\Http\Response
   */
  public function memberForm()
  {
      return view('/member/memberForm');
  }
}
