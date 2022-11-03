<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class customercontroller extends Controller
{
    
    public function profile(){
        return view('Backend.pages.customer');
    }
    
}
