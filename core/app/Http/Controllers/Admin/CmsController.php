<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Cms;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class CmsController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return Response
   */
  public function index()
  {
    $title = "Content Management";
    $page_active = "cms";
    $entries = Cms::all();

    return view('admin.cms.index', compact('title','page_active','entries'));
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return Response
   */
  public function create()
  {
    $title = "Create CMS Block";
    $page_active = "cms";

    return view('admin.cms.create', compact('title','page_active'));
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param  Request  $request
   * @return Response
   */
  public function store(Request $request)
  {
    $entry = new Cms;
    $entry->title = $request->title;
    $entry->tag = $request->tag;
    $entry->content = $request->content;
    $entry->status = $request->status;

    $entry->save();
    session()->flash('flash_success','CMS block saved!');
    return redirect()->route('admin.cms.index');
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
    $title = "Edit CMS Block";
    $page_active = "cms";
    $cms = Cms::findOrFail($id);

    return view('admin.cms.edit', compact('title','page_active','cms'));
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
    $cms = Cms::find($id);
    $cms->title = $request->title;
    $cms->tag = $request->tag;
    $cms->content = $request->content;
    $cms->status = $request->status;
    if($request->status !== "1"){
      $cms->status = 0;
    }
    $cms->save();

    session()->flash('flash_success','CMS block saved!');
    return redirect()->route('admin.cms.index');
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
