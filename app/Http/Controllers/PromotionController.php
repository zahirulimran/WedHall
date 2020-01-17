<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\wh;
use App\promotion_wh;

class PromotionController extends Controller
{
     public function index()
    {
    	$data_promotion = \App\promotion::all();
    	return view('promotion.index',['data_promotion' =>$data_promotion]);
    }
    
    public function create(Request $request)
    {
    	\App\promotion::create($request->all());
    	return redirect('/promotion')->with('success','Done Submit');
    }

    public function edit($id)
    {
    	$data_promotion = \App\promotion::find($id);
    	return view('promotion.edit',['data_promotion'=>$data_promotion]);
    }

    public function update(Request $request,$id)
    {
        $data_promotion = \App\promotion::find($id);
        $data_promotion->update($request->all());
        return redirect('/promotion')->with('success','Done Update');
    }

    public function delete($id)
    {
        $data_promotion = \App\promotion::find($id);
        $data_promotion->delete($data_promotion);
        return redirect('/promotion')->with('success','Done Delete');
    }
    public function insert($id)
    {
        $data_promotion = \App\promotion::find($id);
        $data_wh = \App\wh::all();
    	return view('promotion.insert',['data_promotion'=>$data_promotion],['data_wh'=>$data_wh]);
    }
    public function insertOps(Request $request)
    {
        \App\promotion_wh::create($request->all());
    	return redirect('/promotion')->with('success','Done Submit');
    }
}
