<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Directory;
use App\Department;
use App\Location;
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
    $title = "Create Entry";
    $page_active = "directory";
    $active_departments = Department::orderBy('title')->lists('title', 'id');
    $active_locations = Location::orderBy('title')->lists('title', 'id');

    return view('admin.directory.create', compact('title','page_active','active_departments','active_locations'));
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
    if($request->status !== "1"){
      $entry->status = 0;
    }
    $entry->location_id = $request->location_id;
    $entry->department_id = $request->department_id;
    $entry->primary_phone = $request->primary_phone;
    $entry->secondary_phone = $request->secondary_phone;
    $entry->website = $request->website;
    $entry->twitter = $request->twitter;
    $entry->facebook = $request->facebook;
    $entry->linkedin = $request->linkedin;
    $entry->note = $request->note;

    $entry->save();
    session()->flash('flash_success','Entry saved!');
    return redirect()->route('admin.directory.index');
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
    $active_departments = Department::orderBy('title')->lists('title', 'id');
    $active_locations = Location::orderBy('title')->lists('title', 'id');

    return view('admin.directory.edit', compact('title','page_active','entry','active_departments','active_locations'));
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
    $entry->first_name = $request->first_name;
    $entry->last_name = $request->last_name;
    $entry->email = $request->email;
    if($request->status !== "1"){
      $entry->status = 0;
    }
    $entry->location_id = $request->location_id;
    $entry->department_id = $request->department_id;
    $entry->primary_phone = $request->primary_phone;
    $entry->secondary_phone = $request->secondary_phone;
    $entry->website = $request->website;
    $entry->twitter = $request->twitter;
    $entry->facebook = $request->facebook;
    $entry->linkedin = $request->linkedin;
    $entry->note = $request->note;

    $entry->save();

    session()->flash('flash_success','Entry saved!');
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
