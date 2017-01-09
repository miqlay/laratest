<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class PagesController extends Controller
{
    public function about() {
        //配列を渡す
        $array = array("a" => 0, "b" => 1, "c" => 2);
        $array["d"] = array("z", "y");
        print "<pre>";
        print_r($array);
        print "</pre>";
        //$var = "test";
        //return view('pages.about', $var); 
        return view('pages.about', $array); 
    }
}
