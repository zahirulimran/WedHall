<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;

class UserWHController extends Controller
{
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'role' => ['required', 'string', 'max:255'],
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'phoneNo' => ['required', 'string', 'max:255'],
            'address' => ['required', 'string', 'max:255'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    public function index()
    {
    	$data_users = \App\User::all();
    	return view('user.index',['data_users' =>$data_users]);
    }
    public function create(Request $request)
    {
    	\App\user::create($request->all());
    	return redirect('/user')->with('success','Done Submit');
    }
    public function edit($id)
    {
    	$data_users = \App\user::find($id);
    	return view('user.edit',['data_users'=>$data_users]);
    }

    public function update(Request $request,$id)
    {
        $data_users = \App\user::find($id);
        $data_users->update($request->all());
        return redirect('/user')->with('success','Done Update');
    }
    public function delete($id)
    {
        $data_users = \App\user::find($id);
        $data_users->delete($data_users);
        return redirect('/user')->with('success','Done Delete');
    }
}
