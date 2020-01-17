<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades;
use App\wh;

class BookingController extends Controller
{
    public function index()
    {
        $data_booking = \App\booking::all();
        $data_wh = \App\wh::all();
        return view('booking.index',['data_booking' =>$data_booking],['data_wh' => $data_wh]);   
    }
    
    public function create(Request $request)
    {
    	\App\booking::create($request->all());
    	return redirect('/booking')->with('success','Done Submit');
    }

    public function edit($id)
    {
        $data_booking = \App\booking::find($id);
        $data_wh = \App\wh::all(); 
    	return view('booking.edit',['data_booking'=>$data_booking],['data_wh' => $data_wh]);
    }


    public function update(Request $request,$id)
    {
        $data_booking = \App\booking::find($id);
        $data_booking->update($request->all());
        return redirect('/booking')->with('success','Done Update');
    }

    public function delete($id)
    {
        $data_booking = \App\booking::find($id);
        $data_booking->delete($data_booking);
        return redirect('/booking')->with('success','Done Delete');
    }
}
