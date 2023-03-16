<?php

namespace App\Http\Controllers;

use App\Models\Userpage;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Spatie\Permission\Models\Role;
use DB;
use Illuminate\Support\Arr;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function userpage(Request $request)
    {
        $data['userpages']=User::all();
        return view('user',$data);
    }
    public function save_user (Request $request){
        $input = $request->all();
          $password = $request->password; // get the value of password field
          $input['password'] = Hash::make($password); // encrypt the password
        $input['name'] = $request->name;

        $input = User::create($input);
        $input->save();
        return redirect()->back()->with('success', 'User created successfully');
        }
           
  
        public function update_user(Request $request)
        {
            $input = $request->all();
            $id = $request->id;
            $userpage = User::find($id);
            $userpage->update($input);
            return redirect()->back()->with('success', 'Record updated successfully');
        }
        public function delete_userpage(Request $request)
        {
            $id = $request->id;
            $userpage = User::find($id);
            $userpage->delete();
    
            return redirect()->back()->with('success', 'Record deleted successfully');
        }

        

    }
