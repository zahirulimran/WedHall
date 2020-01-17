<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

use App\wh;
use App\facilities;
use App\facilities_wh;

class WHController extends Controller
{
    public function index()
    {
        //$data_fac = facilities::all();
        //$data_fac = facilities::with('wedd')->get();
        //return view('wh.index',compact('data_fac',$data_fac));
        //return $data_fac;
        
        //$data_wh = wh::all();
        $data_wh = wh::with('faci','pro','ser')->get();
        //$data_wh = wh::with('faci')->find(14);
        return view('wh.index',compact('data_wh'));
        //return $data_wh;
        //dd($data_wh);
        
    }
    
    public function create(Request $request)
    {
        if($request->hasfile('image'))
        {
            $image = $request->file('image');
            $name = str_slug($request->image).'.'.$image->getClientOriginalExtension();
            $destination = storage_path() . '/public/uploads/photos/';
            $nameDestination = $destination."/".$name;
            $image->move($destination,$name);
        }
        \App\wh::create($request->all());
        $request->session()->put('userID');
    	return redirect('/wh')->with('success','Done Submit');
    }

    public function edit($id)
    {
        $data_wh = \App\wh::find($id);
        // $data_facilities = \App\facilities::find($id);
    return view('wh.edit',compact('data_wh'/*'data_facilities'*/));
    }

    public function view($id)
    {
    	$data_wh = \App\wh::find($id);
    	return view('wh.view',['data_wh'=>$data_wh]);
    }

    public function update(Request $request,$id)
    {
        $data_wh = \App\wh::find($id);
        $data_wh->update($request->all());
        return redirect('/wh')->with('success','Done Update');
    }

    public function delete($id)
    {
        $data_wh = \App\wh::find($id);
        $data_wh->delete($data_wh);
        return redirect('/wh')->with('success','Done Delete');
    }


    public function list2()
    {
        
        $option = wh::with([
            'faci' => function($query){
                $fac = Input::has('fac') ? Input::get('fac') : null;
                if(isset($fac)){
                    $query -> where('fac','like',"%$fac%");
                }
            } 
         ])->get();
         return view('wh.list',compact('option'));
    }
    
    public function list1()
    {
        $option = wh::with(['faci'])->whereHas('faci',function($query){
            $fac = Input::has('fac') ? Input::get('fac') : null;
            if(isset($fac)){
                    $query -> where('fac','like',"%$fac%");
                }
            })->get();
            return view('wh.list',compact('option'));
            DB::listen( function($sql){
            var_dump($sql);
         });
    }

    public function list()
    {   
        $option = wh::with(['faci','ser'])->where(function($query){
            $min_price = Input::has('min_price') ?  Input::get('min_price') : null;
            $max_price = Input::has('max_price') ? Input::get('max_price') : null;
            $locations = Input::has('locations') ? Input::get('locations') : null;
            $caps = Input::has('caps') ? Input::get('caps') : null;
            $fac = Input::has('fac') ? Input::get('fac') : null;
            $ser = Input::has('ser') ? Input::get('ser') : null;

            if(isset($min_price) && isset($max_price)){
                if(isset($locations)){
                    if(isset($caps)){
                        $query-> where('price','>=',$min_price);
                        $query-> where('price','<=',$max_price);
                        $query-> where('address','like', "%{$locations}%");
                        $query-> where('capacity','<=',$caps);
                    }
                    $query-> where('price','>=',$min_price);
                    $query-> where('price','<=',$max_price);
                    $query-> where('address','like', "%{$locations}%");
                    
                }
                elseif(empty($locations)){
                    if(isset($caps)){
                        $query-> where('price','>=',$min_price);
                        $query-> where('price','<=',$max_price);
                        $query-> where('capacity','<=',$caps);
                    }
                }
                $query-> where('price','>=',$min_price);
                $query-> where('price','<=',$max_price);
            }
            elseif(empty($min_price) && empty($max_price)){
                if(isset($locations)){
                    if(isset($caps)){
                        $query-> where('address','like', "%{$locations}%");
                        $query-> where('capacity','<=',$caps);
                    }
                    $query-> where('address','like', "%{$locations}%");
                    
                }
                elseif(empty($locations)){
                    if(isset($caps)){
                        $query-> where('capacity','<=',Input::has('caps') ? Input::get('caps') : null);
                    }
                    elseif(empty($caps)){
                        if(isset($fac)){
                            $option = wh::with(['faci'])->whereHas('faci',function($query){
                                $fac = Input::has('fac') ? Input::get('fac') : null;
                                $query -> where('fac','like',"%$fac%");
                            });
                        }
                    }
                }
            }
            })->get();
            return view('wh.list',compact('option'));
                    DB::listen( function($sql){
            var_dump($sql);
        });
    }
}