<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\wh;
use App\services_wh;

class ServicesController extends Controller
{
     public function index()
    {
    	$data_services = \App\services::all();
    	return view('services.index',['data_services' =>$data_services]);
    }
    
    public function create(Request $request)
    {
    	\App\services::create($request->all());
    	return redirect('/services')->with('success','Done Submit');
    }

    public function edit($id)
    {
    	$data_services = \App\services::find($id);
    	return view('services.edit',['data_services'=>$data_services]);
    }

    public function update(Request $request,$id)
    {
        $data_services = \App\services::find($id);
        $data_services->update($request->all());
        return redirect('/services')->with('success','Done Update');
    }

    public function delete($id)
    {
        $data_services = \App\services::find($id);
        $data_services->delete($data_services);
        return redirect('/services')->with('success','Done Delete');
    }
    public function insert($id)
    {
        $data_services = \App\services::find($id);
        $data_wh = \App\wh::all();
    	return view('services.insert',['data_services'=>$data_services],['data_wh'=>$data_wh]);
    }
    public function insertOps(Request $request)
    {
        \App\services_wh::create($request->all());
    	return redirect('/services')->with('success','Done Submit');
    }
}
