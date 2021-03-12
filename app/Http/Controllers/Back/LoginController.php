<?php

namespace App\Http\Controllers\Back;

use App\Models\Admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    //

    public function index()
    {
        return view('admin/login');
    }

    public function login(Request $request)
    {

        $status = Auth::guard('admin')->attempt([
            'username' => $request['username'],
            'password' => $request['password']
        ]);
        if (!$status) {
            return redirect('admin/login');
        }
        $user = Auth::guard('admin')->user();
        $ip = $_SERVER['REMOTE_ADDR'];
        $user->loginIp = $ip;
        $user->save();
        session()->put('username', $user->username);
        session()->put('userFlag', $user->flag);
        return redirect('admin/');
    }

    public function logout()
    {
        Auth::guard('admin')->logout();
        return redirect('admin/login');
    }


}
