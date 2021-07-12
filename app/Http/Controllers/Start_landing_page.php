<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Tutors;
use Illuminate\Http\Request;
use Validator, Input, Redirect, Session, Storage;

use App\Http\Requests;

class Start_landing_page extends Controller
{
    public function index()
    {
        return view('pages.landing_page');    
    }

    public function about(){
        return view('pages.about');
    }
    public function general_search_2(Request $request)
    {   

        $name = $request->name;
        $data['t_data']=$name;
        var_dump($data); die();



        //return redirect('/home');
        return view('pages.home');
    }
}   