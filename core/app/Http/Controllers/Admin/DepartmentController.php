<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Department;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class DepartmentController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return Response
   */
  public function index()
  {
    $title = "Department Management";
    $page_active = "department";
    $departments = Department::all();

    return view('admin.department.index', compact('title','page_active', 'departments'));
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return Response
   */
  public function create()
  {
    $title = "Create Department";
    $page_active = "department";

    return view('admin.department.create', compact('title','page_active'));
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param  Request  $request
   * @return Response
   */
  public function store(Request $request)
  {
    $location = new Department;
    $location->title = $request->title;
    $location->status = $request->status;
    $location->note = $request->note;

    $location->save();
    session()->flash('flash_success','Department saved!');
    return redirect()->route('admin.department.index');
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
    $title = "Edit Department";
    $page_active = "department";
    $department = Department::findOrFail($id);

    return view('admin.department.edit', compact('title','page_active','department'));
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
    $department = Department::find($id);
    $department->title = $request->title;
    $department->note = $request->note;
    $department->status = $request->status;
    if($request->status !== "1"){
      $department->status = 0;
    }
    $department->save();

    session()->flash('flash_success','Department saved!');
    return redirect()->route('admin.department.index');
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
