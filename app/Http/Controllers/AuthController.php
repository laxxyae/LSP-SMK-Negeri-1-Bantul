<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use RealRashid\SweetAlert\Facades\Alert;

class AuthController extends Controller
{
    public function validateUser(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if ($validator->fails()) {
            Alert::success("Login Gagal", "Data Tidak Valid");
        }

        $creds = [
            'email' => $request->email,
            'password' => $request->password
        ];

        if ($request->role == "admin"){
            if (Auth::guard('user')->attempt($creds)) {
                $request->session()->regenerate();
    
                return redirect('/dashboard');
            }
        }
        else{
            if (Auth::guard('siswa')->attempt($creds)) {
                $request->session()->regenerate();
    
                return redirect('/permohonan-kompetensi');
            }
        }
        
        Alert::error('Login Gagal', "Akun Tidak Ditemukan");
        return redirect()->back();
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/beranda');
    }
}