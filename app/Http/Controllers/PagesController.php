<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
      $title = 'Welcom In LARAVEL App';
      // we can add title in onther way
      // return view('pages.index', compact('title'));
      return view('pages.index') -> with('title', $title);

    }

    //aboutoperations
    public function about(){

      $title = 'Thank you to read about us';
      return view('pages.about') -> with('title', $title);

    }

    public function services(){

      $data = array(
        'title' => 'We have This Services',
        'para' => 'This is Laravel lessones',
        'services' => ['Web Design', 'Programing', 'SEO']
      );
      // dd($data['services'][2]);
      return view('pages.services') -> with($data);

    }
}
