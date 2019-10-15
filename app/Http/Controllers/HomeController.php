<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Registry;

class HomeController extends Controller{


  public function __construct()
  {
  }

  public function dashboard ()
  {
    $registries = Registry::inRandomOrder()->get();

    return view('dashboard', compact('registries'));
  }

  public function home()
  {
    return redirect()->route('dashboard');
  }
}
