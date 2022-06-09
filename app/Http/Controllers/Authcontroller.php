<?php

namespace App\Http\Controllers;

use App\Models\Membres;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;


class Authcontroller extends Controller
{
    public function register()
    {
        return view('register');
    }

    public function register_action(Request $request)
    {
        $input = $request->input();
        //dd($input);
        $validate = $request->validate([
            'name' =>'required',
            'email' => 'required|unique:users,email|max:255',
            'password' => 'required',
        ]);

        $membre = new User();
        $membre->name=$validate['name'];
        $membre->email = $validate['email'];
        $membre->password = Hash::make($validate['password']);
        $membre->save();
        return redirect()->route('login')->with('status','Registration succes.Please Login!');
    }
    public function login()
    {
        return view('login');
    }
    public function login_action(Request $request) 
    {
            $request->validate([
            'email' => 'required',
            'password' => 'required',
            ]);
            $membre = User::where('email' ,'=', $request['email'])
            ->first();
            //$roles=User::with('roles')->get()->where('name' ,'=', $user->name);
            $credentials = $request->only('email', 'password');
           
            if (Auth::attempt($credentials, $request->get('remember'))) {
               
            $request->session()->regenerate();
            session(['user' => $membre]);
            return redirect()->intended(route('profile',$membre->id));
            }
       return redirect()->route('login')->with('Echec','Wrong username or password!');      
    }
    public function logout(Request $request)
{
    Auth::logout();
 
    $request->session()->invalidate();
 
    $request->session()->regenerateToken();
 
    return redirect('login');
}

}