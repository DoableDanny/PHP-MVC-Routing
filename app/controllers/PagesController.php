<?php

namespace App\Controllers;

class PagesController {
  
  public function home() {
    // Controller will ask the model to do something (e.g. get data), do whatever it needs then defers to a view.

    $title = 'Home';
    return view('index', compact('title'));
  }

  public function about() {
    $title = 'About';
    // compact('title') => ['title' => 'About']
    return view('about', compact('title'));
  }

  public function contact() {
    $address = '24 Dart Avenue, Bristow-on-Harrows, Philford';

    $title = 'Contact';
    return view('contact', compact('address', 'title'));
  }
}