<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Directory;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class PagesController extends Controller
{
  // homepage
  public function home()
  {
    $title = "Home Page";
    $page_active = "home";
    return view('pages.home', compact('title','page_active'));
  }

  // page that displays the table output
  public function table()
  {
    $title = "Table Page";
    $page_active = "table";
    $entries = Directory::where('status',1)->get();

    return view('pages.table', compact('title','page_active', 'entries'));
  }

  // page that displays the table output
  public function about()
  {
    $title = "About Page";
    $page_active = "about";
    return view('pages.about', compact('title','page_active'));
  }

  // page that displays the table output
  public function contact()
  {
    $title = "Contact Page";
    $page_active = "contact";
    return view('pages.contact', compact('title','page_active'));
  }
}
