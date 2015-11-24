<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Directory;
use App\User;
use App\Message;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return Response
   */
  public function index()
  {
    $title = "Dashboard Home";
    $page_active = "dashboard";
    $count_directory = Directory::where('status',1)->count();
    $count_messages = Message::count();
    $count_users = User::where('status',1)->count();
    $messages = Message::orderBy('created_at','desc')->take(5)->get();

    return view('admin.dashboard', compact('title','page_active','count_directory','count_messages','count_users','messages'));
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return Response
   */
  public function create()
  {
    //
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param  Request  $request
   * @return Response
   */
  public function store(Request $request)
  {
    //
  }

  /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return Response
   */
  public function show($id)
  {
    //
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  int  $id
   * @return Response
   */
  public function edit($id)
  {
    //
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  Request  $request
   * @param  int  $id
   * @return Response
   */
  public function update(Request $request, $id)
  {
    //
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function destroy($id)
  {
    //
  }
}
