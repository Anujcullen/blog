<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
   public function index(){
       $title = 'Welcome to Laraval';
       return view('pages.index', compact('title'));
   }

   public function about(){
       $title = 'About Us';
       return view('pages.about')->with('title', $title);
   }

   public function services(){
       return view('pages.services');
   }
}
