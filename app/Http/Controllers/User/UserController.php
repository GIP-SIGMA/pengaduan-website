<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Masyarakat;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
    return view('user.landing');
    }

    public function login(Request $request)
    {
    $username = Masyarakat::where('username', $request->username)->first();

        if (!$username) {
            return redirect()->back()->with(['pesan'=>'Username Not Found']);
        }
        $password = Hash::check($request->password, $username->password);
        if (!$password) {
            return redirect()->back()->with(['pesan'=>'Wrong password']);
        }

        if(Auth::guard('masyarakat')->attempt(['username' => $request->username, 'password' => $request->password])) {
            return redirect()->route('ereporthub.index');
        }
        else {
            return redirect()->back()->with(['pesan'=>'Account Not Registered']);
        }
    
    }

    public function formRegister()
    {
    return view('user.register');
    }  
}