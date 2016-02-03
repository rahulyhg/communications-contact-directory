<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use Excel;
use App\Directory;
use App\Department;
use App\Location;
use App\Tag;
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
    $active_departments = Department::where('status', 1)->orderBy('title')->lists('title', 'id');
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
    $entry->title = $request->title;
    $entry->email = $request->email;
    if($request->status !== "1"){
      $entry->status = 0;
    } else {
      $entry->status = $request->status;
    }
    $entry->location_id = $request->location_id;
    $entry->department_id = $request->department_id;
    $entry->primary_phone = $request->primary_phone;
    $entry->secondary_phone = $request->secondary_phone;
    $entry->website = $request->website;
    $entry->twitter = $request->twitter;
    $entry->facebook = $request->facebook;
    $entry->googleplus = $request->googleplus;
    $entry->snapchat = $request->snapchat;
    $entry->instagram = $request->instagram;
    $entry->linkedin = $request->linkedin;
    $entry->note = $request->note;


    if($request->selected_tags){
        $entry->tags()->attach($selected_tags);
    }
    // $tags = $request->tags;

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
    $tags = Tag::orderBy('name')->lists('name', 'id');
    $selected_tags = $entry->selected_tags;

    return view('admin.directory.edit', compact('title','page_active','entry','active_departments','active_locations','tags','selected_tags'));
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
    $entry->title = $request->title;
    $entry->email = $request->email;
    if($request->status !== "1"){
      $entry->status = 0;
    } else {
      $entry->status = $request->status;
    }
    $entry->location_id = $request->location_id;
    $entry->department_id = $request->department_id;
    $entry->primary_phone = $request->primary_phone;
    $entry->secondary_phone = $request->secondary_phone;
    $entry->website = $request->website;
    $entry->twitter = $request->twitter;
    $entry->facebook = $request->facebook;
    $entry->googleplus = $request->googleplus;
    $entry->snapchat = $request->snapchat;
    $entry->instagram = $request->instagram;
    $entry->linkedin = $request->linkedin;
    $entry->note = $request->note;

    if($request->selected_tags){
        $selected_tags = $request->selected_tags;
    } else {
        $selected_tags = array();
    }

    $entry->tags()->sync($selected_tags);

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

  /**
   * Show the form for creating a new resource.
   *
   * @return Response
   */
  public function excel()
  {
    Excel::create('Directory', function($excel) {

      $excel->setTitle('Washington County')
        ->setCreator('Washington County')
        ->setCompany('Washington County')
        ->setDescription('A demonstration to change the file properties');


      $excel->sheet('All Directory Entries', function($sheet) {
        $entries = Directory::all();

        foreach($entries AS $entry) {
          $status = "Disabled";
          if($entry->status == 1){
            $status = "Enabled";
          }
          $sheet->appendRow(array(
            $entry->first_name,
            $entry->last_name,
            $entry->email,
            $status,
            $entry->location->title,
            $entry->department->title,
            $entry->primary_phone,
            $entry->secondary_phone,
            $entry->twitter,
            $entry->facebook,
            $entry->googleplus,
            $entry->linkedin,
            $entry->note
          ));
        }

        $headers = array(
          'First',
          'Last',
          'Email',
          'Status',
          'Location',
          'Department',
          'Primary Phone',
          'Secondary Phone',
          'Twitter',
          'Facebook',
          'Google Plus',
          'LinkedIn',
          'Note'
        );
        $sheet->prependRow(1,$headers);
      });

    })->export('xls');
  }
}
