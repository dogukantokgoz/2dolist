<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login()
    {
        User::all()->first();
        return view('login');
    }

    public function giris(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:4',
        ]);

        if(Auth::attempt(['email' => $request->email, 'password' => $request->password])){
            $request->session()->regenerate();
            return redirect()->route('index')->with('success', 'Başarıyla giriş yaptınız.');
        } else {
            return redirect()->back()->with('success', 'Kullanıcı adı veya şifreniz hatalı');
        };
        return view('login');
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('login')->with('success', 'Çıkış Yaptınız');
    }
    public function loginCreate()
    {
        return view('loginCreate');
    }

    public function loginPost(LoginRequest $request)
    {
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);
        return redirect()->route('login')->with('success', 'Başarıyla Kaydoldunuz');
    }

}
