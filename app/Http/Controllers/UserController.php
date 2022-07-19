<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    public function login()
    {
        return view('login');
    }

    public function signin(Request $request)
    {
        $validated = $request->validate([
            'email' => 'required',
            'password' => 'required',
        ],[
            'email.required' => 'email is required',
            'password.required' => 'Password is required'
        ]);

        $emailCount = User::where('email', $request->email)->count();

        if ($emailCount == 0) {
            return redirect('login')->with('error','Please enter valid email');
        }

        $remember_me = $request->has('remember_me') ? true : false;
        
        $auth = '';

        $auth = ['email' => $request->get('email'), 'password' => $request->get('password')];

        if (Auth::attempt($auth, $remember_me)) {
            if (!empty($remember_me)) {
                $user = auth()->user();
                Auth::login($user, true);
            }

            return redirect('/');
        } else {
            return redirect('login')->with('error','Please enter valid password');
        }

    }

    public function register()
    {
        return view('register');
    }

    public function signup(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|confirmed|min:6',
        ]);

        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $response = $user->save();
        if ($response) {
            return redirect('login')->with('success', 'User registered Successfully');
        } else {
            return redirect('login')->with('error', "User Couldn't be registered");
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect('login');
    }

    public function dashboard(){
        return view('user.dashboard');
    }

    
    public function forget_password(){
        return view('forget_password');
    }

    public function reset_password(Request $request){
        $validated = $request->validate([
            'email' => 'required',
            'password' => 'required|confirmed|min:6',
        ],[
            'email.required' => 'email is required',
            'password.required' => 'Password is required'
        ]);

        $emailCount = User::where('email', $request->email)->count();

        if ($emailCount == 0) {
            return redirect()->back()->with('error',"email doesn't exists");
        }

        else {
            User::where('email',$request->email)->update(['password'=>Hash::make($request->password)]);
            return redirect('login')->with('success','Password Reset Successfully');
        }
    }
    

}
