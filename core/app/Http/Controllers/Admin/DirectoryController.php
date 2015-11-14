<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Directory;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class DirectoryController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return Response
   */
  public function index()
  {
    $title = "Directory Management";
    $page_active = "directory";
    $entries = Directory::all();

    return view('admin.directory.index', compact('title','page_active', 'entries'));
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
    $entry = new Directory;
    $entry->first_name = $request->first_name;
    $entry->last_name = $request->last_name;
    $entry->email = $request->email;
    $entry->location = $request->location;
    $entry->primary_phone = $request->primary_phone;
    $entry->secondary_phone = $request->secondary_phone;
    $entry->website = $request->website;
    $entry->twitter = $request->twitter;
    $entry->facebook = $request->facebook;
    $entry->linkedin = $request->linkedin;
    $entry->note = $request->note;
    $entry->password = bcrypt('password');

    $entry->save();
    session()->flash('flash_message','Entry saved!');
    return redirect()->route('store_users');
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
    $title = "Edit Entry";
    $page_active = "directory";
    $entry = Directory::findOrFail($id);

    return view('admin.directory.edit', compact('title','page_active','entry'));
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
    $entry = Directory::find($id);
    $entry->update($request->all());

    return redirect()->route('admin.directory.index');
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
