<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    public function profile()
    {
        return view('Backend.pages.admin');
    }



    public function store(REQUEST $request)
    {

      //dd($request->all());
          Admin::create([
            'Name'=>$request->name,
            'email'=>$request->email,
            'phone_number'=>$request->phone,
            'address'=>$request->address
          ]);
          return 'succesful';

    }
    
}
