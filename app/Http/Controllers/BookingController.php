<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Booking;

class BookingController extends Controller
{
    public function book (Request $request)
    {

       booking::create([
           'sender_name'=>$request->sender_name,
           'sender_email'=>$request->sender_email, 
           'sender_mobile'=>$request->sender_mobile,
           'sender_branch'=>$request->sender_branch,
           'sender_address'=>$request->sender_address,
           'sender_city'=>$request->sender_city,
           'receiver_name'=>$request->receiver_name,
           'receiver_email'=>$request->receiver_email, 
           'receiver_mobile'=>$request->receiver_mobile,
           'receiver_branch'=>$request->receiver_branch,
           'receiver_address'=>$request->receiver_address,
           'receiver_city'=>$request->receiver_city,
           
                     
        ]);
        notify()->success('Booking successfull');


        return redirect()->back();
    } 
    public function bookinglist(){
        $bookingList = Booking::all();
        return view('Backend.pages.booking.list',compact('bookingList'));
    }





    public function deletebooking($booking_id){
        booking::find($booking_id)->delete();
        return redirect()->back()->with('message','booking deleted successfully.');
    }
    public function viewbooking($booking_id)
    {
      $booking=booking::find($booking_id);
      return view('Backend.pages.booking.view',compact('booking'));
    }
    public function edit($booking_id)
    {
        $booking=booking::find($booking_id);
        // dd($branch);
        return view('Backend.pages.booking.edit',compact('booking'));
    }
    public function update(Request $request,$booking_id){
        $booking=booking::find($booking_id);
        $booking->update ([
            //database column name => input field name
            'sender_name'=>$request->sender_name,
            'sender_email'=>$request->sender_email, 
            'sender_mobile'=>$request->sender_mobile,
            'sender_branch'=>$request->sender_branch,
            'sender_address'=>$request->sender_address,
            'sender_city'=>$request->sender_city,
            'receiver_name'=>$request->receiver_name,
            'receiver_email'=>$request->receiver_email, 
            'receiver_mobile'=>$request->receiver_mobile,
            'receiver_branch'=>$request->receiver_branch,
            'receiver_address'=>$request->receiver_address,
            'receiver_city'=>$request->receiver_city,
         ]);
         return redirect()->route('booking.index')->with('message','Update success.');


    }
     

    

}
