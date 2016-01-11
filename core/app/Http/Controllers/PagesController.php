<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Cms;
use App\Message;
use App\Directory;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class PagesController extends Controller
{
  // homepage
  public function splash()
  {
    // $title = "Home Page";
    // $page_active = "home";
    // return view('pages.home', compact('title','page_active'));
    return view('pages.splash');
  }

  // page that displays the table output
  public function table()
  {
    $title = "Table Page";
    $page_active = "table";
    $entries = Directory::where('status',1)->get();

    return view('pages.table', compact('title','page_active', 'entries'));
  }

  /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return Response
   */
  public function modal($id)
  {
    $title = "Table Page";
    $page_active = "table";
    $entry = Directory::find($id);

    return view('pages.modal', compact('entry'));
  }

  // page that displays the table output
  public function about()
  {
    $title = "About Page";
    $page_active = "about";
    $content = Cms::where('tag','about')->where('status',1)->first();

    return view('pages.about', compact('title','page_active', 'content'));
  }

  // page that displays the table output
  public function contact()
  {
    $title = "Contact Page";
    $page_active = "contact";
    return view('pages.contact', compact('title','page_active'));
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param  Request  $request
   * @return Response
   */
  public function storeContact(Request $request)
  {
    $message = new Message;
    $message->name = $request->name;
    $message->email = $request->email;
    $message->subject = $request->subject;
    $message->message = $request->message;

    $message->save();
    session()->flash('flash_success','Thank you for your message.');
    return redirect()->route('home');
  }
}
