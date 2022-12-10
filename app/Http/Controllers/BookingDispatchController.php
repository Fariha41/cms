<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Cargo;
use App\Models\Dispatch;
use Illuminate\Http\Request;

class BookingDispatchController extends Controller
{
    public function bookingDispatch($id){
        $typ= Cargo::all();
        $booking = Booking::find($id);
        return view('Backend.pages.booking.bookingDispatch',compact('typ','booking'));
    }
    public function detailsdispatch(Request $request,$id){
        $booking = Booking::find($id);
        // $cargo = Cargo::where('id',$request->cargo)->pluck('vehicle_capacity');
        // $oneCargoCapacity = $cargo[0];
        // $bookingInThisCargo = Dispatch::where('cargo_id',$request->cargo)->with('booking','cargo')->get();
        // // dd($bookingInThisCargo);
       
        Dispatch::create ([
            //database column name => input field name
            'booking_id'=>$booking->id ,
            'cargo_id'=>$request->cargo,
            
         ]);
         return redirect()->route('admin.booking');
        }

        public function details(){
            $dispatch = Dispatch::all();
            return view('Backend.pages.dispatch.list',compact('dispatch'));
        }

}
