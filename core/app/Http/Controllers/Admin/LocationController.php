<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\State;
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
  $title = "Organization Management";
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
    $title = "Create Organization";
    $page_active = "location";
    $states = State::orderBy('name')->lists('name', 'id');

    return view('admin.location.create', compact('title','page_active','states'));
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param  Request  $request
   * @return Response
   */
  public function store(Request $request)
  {
    $location = new Location;
    $location->title = $request->title;
    if($request->status !== "1"){
      $location->status = 0;
    } else {
      $location->status = $request->status;
    }
    $location->street_address_1 = $request->street_address_1;
    $location->street_address_2 = $request->street_address_2;
    $location->city = $request->city;
    $location->state_id = $request->state_id;
    $location->zipcode = $request->zipcode;
    $location->url = $request->url;
    $location->note = $request->note;

    $location->save();
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
    $title = "Edit Organization";
    $page_active = "location";
    $location = Location::findOrFail($id);
    $states = State::orderBy('name')->lists('name', 'id');

    return view('admin.location.edit', compact('title','page_active','location','states'));
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
    if($request->status !== "1"){
      $location->status = 0;
    } else {
      $location->status = $request->status;
    }
    $location->street_address_1 = $request->street_address_1;
    $location->street_address_2 = $request->street_address_2;
    $location->city = $request->city;
    $location->state_id = $request->state_id;
    $location->zipcode = $request->zipcode;
    $location->url = $request->url;
    $location->note = $request->note;
    $location->save();

    session()->flash('flash_success',$location->title.' successfully updated!');
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
