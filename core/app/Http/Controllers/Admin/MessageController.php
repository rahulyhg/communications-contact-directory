<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Message;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class MessageController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return Response
   */
  public function index()
  {
    $title = "Contact Messages";
    $page_active = "message";
    $messages = Message::orderBy('created_at','desc')->get();

    return view('admin.message.index', compact('title','page_active', 'messages'));
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
    $title = "Read Message";
    $page_active = "message";
    $message = Message::findOrFail($id);

    return view('admin.message.show', compact('title','page_active','message'));
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
