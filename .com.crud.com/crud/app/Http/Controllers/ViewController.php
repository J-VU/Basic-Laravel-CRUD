<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ViewController extends Controller
{
    public function about(){
      $title = 'About Us';
      return view('view.about')->with('title', $title);
    }

    public function home(){
      $title = 'Welcome to CRUDv1!';
      return view('view.home')->with('title', $title);
    }

    public function services(){
      $data = array(
        'title'   => 'Services',
        'services'=> ['Web Design', 'Programer' , 'Developer']);
      return view('view.services')->with($data);
    }
}
