<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Location;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class LocationController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return Response
   */
  public function index()
  {
  $title = "Directory Location Management";
  $page_active = "location";
  $locations = Location::all();

  return view('admin.location.index', compact('title','page_active', 'locations'));
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return Response
   */
  public function create()
  {
    $title = "Create Location";
    $page_active = "location";

    return view('admin.location.create', compact('title','page_active'));
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param  Request  $request
   * @return Response
   */
  public function store(Request $request)
  {
    $entry = new Location;
    $entry->title = $request->title;
    $entry->status = $request->status;
    $entry->note = $request->note;

    $entry->save();
    session()->flash('flash_success','Location saved!');
    return redirect()->route('admin.location.index');
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
    $title = "Edit Location";
    $page_active = "location";
    $location = Location::findOrFail($id);

    return view('admin.location.edit', compact('title','page_active','location'));
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
    $location = Location::find($id);
    $location->title = $request->title;
    $location->note = $request->note;
    $location->status = $request->status;
    if($request->status !== "1"){
      $location->status = 0;
    }
    $location->save();

    session()->flash('flash_success','Location saved!');
    return redirect()->route('admin.location.index');
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
