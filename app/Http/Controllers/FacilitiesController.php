<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\wh;
use App\facilities_wh;

class FacilitiesController extends Controller
{
     public function index()
    {
        $data_facilities = \App\facilities::all();
        $data_wh = \App\wh::all();
    	return view('facilities.index',['data_facilities' =>$data_facilities],['data_wh'=>$data_wh]);
        
    } 
    
    public function create(Request $request)
    {
        $validate = $request->validate([
            'fac' => 'required | max:20',
            'type' => 'required | max:20'
            ]);
        if($validate) {
    	   \App\facilities::create($request->all());
           return redirect('/facilities')->with('success','Done Submit');
        }
        else{
            return redirect('/facilities')->with('fail','Invalid Format');
        }
    }

    public function edit($id)
    {
    	$data_facilities = \App\facilities::find($id);
    	return view('facilities.edit',['data_facilities'=>$data_facilities]);
    }

    public function update(Request $request,$id)
    {
        $data_facilities = \App\facilities::find($id);
        $data_facilities->update($request->all());
        return redirect('/facilities')->with('success','Done Update');
    }

    public function delete($id)
    {
        $data_facilities = \App\facilities::find($id);
        $data_facilities->delete($data_facilities);
        return redirect('/facilities')->with('success','Done Delete');
    }

    public function insert($id)
    {
        $data_facilities = \App\facilities::find($id);
        $data_wh = \App\wh::all();
    	return view('facilities.insert',['data_facilities'=>$data_facilities],['data_wh'=>$data_wh]);
    }
    public function insertOps(Request $request)
    {
        \App\facilities_wh::create($request->all());
    	return redirect('/facilities')->with('success','Done Submit');
    }

    
}
