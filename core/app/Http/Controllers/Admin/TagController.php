<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Tag;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class TagController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = "Tag Management";
        $page_active = "tags";
        $tags = Tag::all();

        return view('admin.tag.index', compact('title','page_active', 'tags'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      $title = "Create Tag";
      $page_active = "tags";

      return view('admin.tag.create', compact('title','page_active'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $tag = new Tag;
      $tag->name = $request->name;
      $tag->save();

      session()->flash('flash_success','Tag saved!');
      return redirect()->route('admin.tag.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $title = "Edit Tag";
      $page_active = "tags";
      $tag = Tag::findOrFail($id);

      return view('admin.tag.edit', compact('title','page_active','tag'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
      $tag = Tag::find($id);
      $tag->name = $request->name;
      $tag->save();

      session()->flash('flash_success','Tag successfully updated!');
      return redirect()->route('admin.tag.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
