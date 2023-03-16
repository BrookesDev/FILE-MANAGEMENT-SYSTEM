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
    public function create()
    {
        $roles = Role::pluck('name','name')->all();
        return view('users.create',compact('roles'));
    }
    public function save_user (Request $request){

        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|same:confirm-password',
            'roles' => 'required'
        ]);
        
        $input = $request->all();
        //   $password = $request->password; // get the value of password field
        //   $input['password'] = Hash::make($password); // encrypt the password
          $input['password'] = Hash::make($input['password']);
          $user = User::create($input);
          $user->assignRole($request->input('roles'));
        //   $input['name'] = $request->name;
        // $input['roles'] = $request->role;

        // $input = User::create($input);
        // $user->assignRole($request->input('roles'));
        $input->save();
        return redirect()->back()->with('success', 'User created successfully');
        }
         
        public function show($id)
        {
            $user = User::find($id);
            return view('users.show',compact('user'));
        }

        public function edit($id)
        {
            $user = User::find($id);
            $roles = Role::pluck('name','name')->all();
            $userRole = $user->roles->pluck('name','name')->all();
        
            return view('users.edit',compact('user','roles','userRole'));
        }


        public function update_user(Request $request, $id)
        {

            $this->validate($request, [
                'name' => 'required',
                'email' => 'required|email|unique:users,email,'.$id,
                'password' => 'same:confirm-password',
                'roles' => 'required'
            ]);

            $input = $request->all();
            if(!empty($input['password'])){ 
                $input['password'] = Hash::make($input['password']);
            }else{
                $input = Arr::except($input,array('password'));    
            }
        
            
            // $id = $request->id;
            $userpage = User::find($id);
            $userpage->update($input);
            DB::table('model_has_roles')->where('model_id',$id)->delete();

            $user->assignRole($request->input('roles'));

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
