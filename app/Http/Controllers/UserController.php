<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Permission;
use App\Models\Userpage;
use Spatie\Permission\Models\Role;
use DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Auth;


class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    
    public function user(Request $request)
    {
        $data['users']=User::all();
        $data['roles'] = Role::pluck('name','name')->all();
        return view('user',$data);
    }
    public function index(Request $request)
    {
        $data = User::orderBy('id','DESC')->paginate(5);
        return view('user.index',compact('data'))
        ->with('i', ($request->input('page', 1) - 1) * 5);
    }
    
    public function save_user (Request $request){
        $input = $request->all();
        $password = $request->password; // get the value of password field
        $input['password'] = Hash::make($password); // encrypt the password
        $input['name'] = $request->name;
        
        $user = User::create($input);
        $user->assignRole($request->input('roles'));
        return redirect()->back()->with('success', 'User created successfully');
    }
    public function create()
    {
        $roles = Role::pluck('name','name')->all();
        return view('user.create',compact('roles'));
    }
    
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
                'email' => 'required|email|unique:users,email',
                'password' => 'required|same:confirm-password',
                'roles' => 'required'
            ]);
        
            $input = $request->all();
            $input['password'] = Hash::make($input['password']);
        
            $user = User::create($input);
            $user->assignRole($request->input('roles'));
        
            return redirect()->route('user.index')
                            ->with('success','User created successfully');
        }
        public function show(Request $request, $id)
        {
            $user = User::find($id);
            // dd('here');
            return view('user.show',compact('user'));
        }
        public function update_user(Request $request)
        {
            $input = $request->all();
            $id = $request->id;
            $user = User::find($id);
            $user->update($input);
            DB::table('model_has_roles')->where('model_id',$id)->delete();
    
            $user->assignRole($request->input('roles'));
        
            return redirect()->back()->with('success', 'Record updated successfully');
        }
        public function edit(Request $request, $id)
        {
            $id = $request->id;
            $user = User::find($id);
            $roles = Role::pluck('name','name')->all();
            $userRole = $user->roles->pluck('name','name')->all();
        
            return view('user.edit',compact('user','roles','userRole'));
        }
        public function update(Request $request, $id)
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
    
        $user = User::find($id);
        $user->update($input);
        DB::table('model_has_roles')->where('model_id',$id)->delete();
    
        $user->assignRole($request->input('roles'));
    
        return redirect()->route('users.index')
                        ->with('success','User updated successfully');
    }
        public function delete_userpage(Request $request)
        {
            $id = $request->id;
            $userpage = User::find($id);
            $userpage->delete();
    
            return redirect()->back()->with('success', 'Record deleted successfully');
        }

        public function destroy($id)
        {
            User::find($id)->delete();
            return redirect()->route('user.index')
            ->with('success','User deleted successfully');
        }

        //change password
        public function changePassword(Request $request)
    {
        return view('changepassword');
    }
 
    public function changePasswordSave(Request $request)
    {
        
        $this->validate($request, [
            'current_password' => 'required|string',
            'new_password' => 'required|confirmed|min:8|string'
        ]);
        $auth = Auth::user();
 
 // The passwords matches
        if (!Hash::check($request->get('current_password'), $auth->password)) 
        {
            return back()->with('error', "Current Password is Invalid");
        }
 
// Current password and new password same
        if (strcmp($request->get('current_password'), $request->new_password) == 0) 
        {
            return redirect()->back()->with("error", "New Password cannot be same as your current password.");
        }
 
        $user =  User::find($auth->id);
        $user->password =  Hash::make($request->new_password);
        $user->save();
        return back()->with('success', "Password Changed Successfully");
    }


    public function permit(Request $request)
    {
        $data['permissions'] = Permission::all();
        return view('roles.permission', $data);
    }
    public function permissionsave(Request $request)
    {
        $input = $request->all();
        $input['name'] = $request->name;
        $input['guard_name'] = $request->name;
        $permission = Permission::create($input);
        $permission->save();
        return redirect()->back()->with('success', 'User created successfully');
    }
    public function deletepermission(Request $request)
    {
        $id = $request->id;
        $permission = Permission::find($id);
        $permission->delete();

        return redirect()->back()->with('success', 'Record deleted successfully');
    }
    }
