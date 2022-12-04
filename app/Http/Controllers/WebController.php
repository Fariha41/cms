<?php
namespace App\Http\Controllers;


use App\Models\User;
use App\Models\Booking;
use Illuminate\Http\Request;

class WebController extends Controller
{
    public function web(){
        $list = Booking::all();
        return view('Frontend.pages.home',compact('list'));
    }
    public function registration(Request $request)
    {

       User::create([
           'name'=>$request->customer_name,
           'email'=>$request->customer_email,
           'mobile'=>$request->customer_phone,
           'password'=> bcrypt($request->customer_password),
            'role'=>'customer'
        ]);
        notify()->success('registration successfull');


        return redirect()->back();
    }
    public function login(Request $request)
    {
        $request->validate([
            'email'=>'required|email',
            'password'=>'required',
        ]);

        $credentials=$request->except('_token');
        if(auth()->attempt($credentials))
        {
      notify()->success('Login success');
            return redirect()->back();
        }
        notify()->error('invalid password');
        return redirect()->back();
    }
    public function logout()
    {
        auth()->logout();
        notify()->success('logout success');
        return redirect()->back();
    }
}
