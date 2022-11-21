<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use App\Models\Register;
use Illuminate\Support\Str;
use App\Models\Role;
use App\Models\User;

class LoginController extends Controller
{
    public function index()
    {
        return view('login');
    }

    public function authenticate(Request $request)
    {
       $data=$request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);
        
        if (Auth::attempt($data)) {
            $request->session()->regenerate();
 
            return redirect()->intended('dashboard');
        }
 
        return back()->with('loginError' , 'Login Anda Gagal');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    //Register
    }
    public function signup()
    {
        $role = role::all();
        return view('register', compact('role'));
    }

    public function tambah(Request $request)
    {
        //insert data
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'id_role' => $request->id_role,
        ]);
       
        Session::flash('registerSuccess', 'User Kelas berhasil Di data !!!');
        return redirect('login');
    }
}


