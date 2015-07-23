<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class PagesController extends Controller
{
    public function home()
    {
      $title = "Home Page";
      $page_active = "home";
      return view('pages.home', compact('title','page_active'));
    }
    public function table()
    {
      $title = "Table Page";
      $page_active = "table";
      return view('pages.table', compact('title','page_active'));
    }
}
