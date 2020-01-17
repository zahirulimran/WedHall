<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Auth;

use App\User;
use App\wh;
use App\facilities;
use App\facilities_wh;
use App\services;
use App\booking;

class FindController extends Controller
{
    public function view($id)
    {
    	$data_wh = \App\wh::find($id);
    	return view('bk',['data_wh'=>$data_wh]);
    }
    public function count()
    {
        $data_booking = \App\booking::all()->count();
        $data_wh = \App\wh::all()->count();
        $data_services = \App\services::all()->count();
        $data_users = \App\User::all()->count();

    	return view('adminlte',compact('data_users','data_booking','data_services','data_wh'));
    }

    public function calendar()
    {
        $bkings = \App\booking::all();
        $data_wh = \App\wh::all();

        return view('calendar',['bkings' => $bkings],['data_wh' => $data_wh]);
    }

    public function index()
    {
    	$data_services = \App\services::all();
    	return view('sr',['data_services' =>$data_services]);
    }

    public function edit($id)
    {
    	$data_users = \App\user::find($id);
    	return view('upProfile',['data_users'=>$data_users]);
    }

    public function update(Request $request,$id)
    {
        $data_users = \App\user::find($id);
        $data_users->update($request->all());
        return view('upProfile',['data_users'=>$data_users]);
    }
    public function create(Request $request)
    {
    	\App\booking::create($request->all());
    	return redirect('/')->with('success','Done Submit');
    }
    public function bk()
    {
        $data_booking = \App\booking::where('userID', Auth::id())->get();
        return view('bkd',['data_booking'=>$data_booking]);
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
            return view('welcome',compact('option'));
                    DB::listen( function($sql){
            var_dump($sql);
        });
    }
    public function list2()
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
            return view('hall',compact('option'));
                    DB::listen( function($sql){
            var_dump($sql);
        });
    }

    public function list3()
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
            return view('home',compact('option'));
                    DB::listen( function($sql){
            var_dump($sql);
        });
    }
}