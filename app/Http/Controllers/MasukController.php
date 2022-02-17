<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MasukController extends Controller
{
    public function index()
    {
        if ($user = Auth::user()) {
            if ($user->role == 'super-admin') {
                return redirect()->to('/home')->with('error', "kamu gak punya akses");
            } elseif ($user->role == 'admin') {
                return redirect()->to('/home')->with('error', "kamu gak punya akses");
            } elseif ($user->role == 'budidaya') {
                return redirect()->to('/dashboard')->with('error', "kamu gak punya akses");
            }
        }
        return view('masuk');
    }

    public function proses_masuk(Request $request)
    {
        request()->validate(
            [
                'email' => 'required',
                'password' => 'required',
            ]
        );

        $kredensil = $request->only('email', 'password');

        if (Auth::attempt($kredensil)) {
            $user = Auth::user();
            if ($user->role == 'super-admin') {
                return redirect()->to('/home');
            } elseif ($user->role == 'admin') {
                return redirect()->to('/home');
            } elseif ($user->role == 'budidaya') {
                return redirect()->to('/dashboard');
            }
            return redirect()->to('masuk');
        }

        return redirect('masuk')
            ->withInput()
            ->withErrors(['masuk_gagal' => 'These credentials do not match our records.']);
    }

    public function logout(Request $request)
    {
        $request->session()->flush();
        Auth::logout();
        return Redirect()->to('masuk')->with('sukses', 'Logout Berhasil');
    }
}
