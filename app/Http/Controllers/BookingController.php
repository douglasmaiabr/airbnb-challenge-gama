<?php

namespace App\Http\Controllers;

use App\Booking;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class BookingController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function getBookings()
    {
        return response()->json(Booking::all());
    }
    public function getBooking($id)
    {
        return response()->json(Booking::find($id));
    }

    public function create(Request $request)
    {
        $booking = Booking::create($request->all());

        return response()->json($booking, 201);
    }

    public function update($id, Request $request)
    {
        $booking = Booking::findOrFail($id);
        $booking->update($request->all());

        return response()->json($booking, 200);
    }

    public function delete($id)
    {
        Booking::findOrFail($id)->delete();
        return response('Deleted Successfully', 200);
    }
}
