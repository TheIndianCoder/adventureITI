<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class AuthController extends Controller
{
    public function register(){
        return view('admin.register');
    }

    public function store(Request $request){
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required'
        ]);
        // return $request->all();

        try{

            $user = new User();

            $user->name = $request->name;
            $user->email = $request->email;
            $user->password = bcrypt($request->password);
            $user->role = 'admin';
            $user->save();
            
            return redirect()->back()->with('success', 'User created successfully');

        }catch(\Exception $e){
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    // login page

    public function login(){
        return view('admin.login');
    }
    // login authentication

    public function authenticate(Request $request){
        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);
        try{

            $credentials = $request->only('email', 'password');
            // echo "<pre>";
            // print_r($credentials);
            // die;

            if(auth()->attempt($credentials)){
                // echo "Login successfull";die;
                return redirect()->route('admin.index');
            }

            return redirect()->back()->with('error', 'Invalid credentials');
            
        }catch(\Exception $e){
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    // logout

    public function logout(){
        auth()->logout();
        return redirect()->route('login');
    }

    // change password

    public function changePassword(Request $request){
        if($user = auth()->guard('web')->user()){

            if($admin = User::where('email', $user->email)->first()){
                
                $admin->password = bcrypt($request->password);
                // echo "<pre>";
                // print_r($admin);die;
                $admin->save();

                return redirect()->back()->with('success','Password Update Successfully');
            }
            return redirect()->back()->with('error','User Not found');
        }
    }
}