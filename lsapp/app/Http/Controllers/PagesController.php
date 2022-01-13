<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    //
    public function index(){
       $title = "Welcome to Laravel..!";
        //return view('pages.index',compact('title'));
        return view ('pages.index')->with('title',$title);
    }

    public function about(){

        $title = "About Us";

        //return view('pages.about');
        return view('pages.about')->with('title',$title);
    }
    public function services(){

        $data = array(


           'title' => 'Services 02',
           'services' => ['Web Development','Desktop Application Development','Digital Marketing','Socail Media Contents Creator']
           

        );

       // return view('pages.services');
       return view ('pages.services')-> with($data);
    }
}
