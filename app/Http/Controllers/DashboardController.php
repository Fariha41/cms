<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function Dashboard(){
         $totalBooking=Booking::all()->count();
        return view('Backend.pages.dashboard', compact('totalBooking'));
    }
}
