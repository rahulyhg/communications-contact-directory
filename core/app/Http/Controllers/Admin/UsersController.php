<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use Auth;
use App\User;
use App\Http\Requests;
use App\Http\Requests\UserRequest;
use App\Http\Controllers\Controller;

class UsersController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return Response
   */
  public function index()
  {
    $title = "User Management";
    $page_active = "users";
    $users = User::all();

    return view('admin.user.index', compact('title','page_active','users'));
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return Response
   */
  public function create()
  {
    $title = "Create User";
    $page_active = "users";

    return view('admin.user.create', compact('title','page_active'));
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param  Request  $request
   * @return Response
   */
  public function store(UserRequest $request)
  {
    $user = new User;
    $user->first_name = $request->first_name;
    $user->last_name = $request->last_name;
    $user->email = $request->email;
    $user->author = Auth::user()->id;
    $user->note = $request->note;
    if($request->status !== "1"){
      $user->status = 0;
    } else {
      $user->status = $request->status;
    }
    if($request->admin !== "1"){
      $user->admin = 0;
    } else {
      $user->admin = $request->admin;
    }
    $user->password = bcrypt('password');

    $user->save();
    session()->flash('flash_success','User saved!');
    return redirect()->route('admin.users.index');
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
    $title = "Edit User";
    $page_active = "users";
    $user = User::findOrFail($id);

    return view('admin.user.edit', compact('title','page_active','user'));
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
    $user = User::find($id);
    $user->first_name = $request->first_name;
    $user->last_name = $request->last_name;
    $user->email = $request->email;
    $user->author = Auth::user()->id;
    $user->note = $request->note;
    if($request->status !== "1"){
      $user->status = 0;
    } else {
      $user->status = $request->status;
    }
    if($request->admin !== "1"){
      $user->admin = 0;
    } else {
      $user->admin = $request->admin;
    }

    $user->save();
    session()->flash('flash_success','User saved!');
    return redirect()->route('admin.users.index');
  }

  /**
   * Toggle the status of the specified resource.
   *
   * @param  int  $id
   * @return Response
   */
  public function toggleStatus($id)
  {
    $user = User::findOrFail($id);

    // toggle the user status (between 0 and 1) based on the current status
    if($user->status == 1){
      $user->status = 0;
      $message = 'disabled';
    } else {
      $user->status = 1;
      $message = 'enabled';
    }

    $user->update();

    session()->flash('flash_success','User '.$message);
    return redirect()->route('admin.users.index');
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
