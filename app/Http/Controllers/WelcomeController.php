<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class WelcomeController extends Controller
{
    var $aiue = "o";

    public function index()
    {
        return view('welcome');
    }
    
    public function index2()
    {
        return view('welcome');
    }
    
    
    private function aa () {
        return "aiueo";
    }
    
    public function contact()  // 追加
    {
        //$test = "concon";
        $this->aiue = $this->aa();
        return $this->aiue;
        //return view('contact');
    }
}
