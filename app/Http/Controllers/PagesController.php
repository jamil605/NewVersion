<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
      public function dashboard(){
        $title='Welcome Home User';
        return view('pages.dashboard')->with('title',$title);
    }
    public function about(){
        $title='About Us';
        return view('pages.about')->with('title',$title);
    }
   public function contact(){
       $title=" For More Information Contact Us at this email below: example@outlook.com";
       return view('pages.contact')->with('title',$title);
   }
   public function services(){
       $data=array(
           'title'=>'Services',
           'services'=>['This Is A Service Page','Register','Learn','Publish Posts']
       );
       return view('pages.services')->with($data);
   }

}
