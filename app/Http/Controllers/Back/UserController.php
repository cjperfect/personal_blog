<?php

namespace App\Http\Controllers\Back;

use App\Models\Admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class UserController extends BackController
{

    public function show()
    {
        $allUsers = Admin::all();
        return view('admin/user', compact('allUsers'));
    }

    public function useradd(Request $request)
    {
        $validate = Validator::make($request->all(), [
            'username' => 'required|unique:admins|max:16|min:6',
            'password' => 'required|max:16|min:6|confirmed',
            'password_confirmation' => 'required|same:password'
        ]);
        if ($validate->passes()) {
            $useradd = Admin::create([
                'username' => $request['username'],
                'password' => bcrypt($request['password']),
            ]);
            if ($useradd) {
                return redirect('admin/user')->with('success', '添加成功!');
            }

        }
        return redirect('admin/user')
            ->withErrors($validate)
            ->withInput();

    }

    public function useredit(Request $request)
    {
        if ($user = Admin::find($request['id'])) {
            echo $user->username;
        };
    }

    public function userchange(Request $request)
    {
        $validate = Validator::make($request->all(), [
            'username' => 'required|max:16|min:6',
            'password' => 'required|max:16|min:6'
        ]);
        if ($validate->passes()) {
            $userUpdate = Admin::find($request['id'])->update([
                'username' => $request['username'],
                'password' => bcrypt($request['password']),
            ]);
            if ($userUpdate) {
                return redirect('admin/user')->with('success', '修改成功!');
            }
        }
        return redirect('admin/user')
            ->withErrors($validate)
            ->withInput();
    }

    public function userdel($id)
    {
        $user = Admin::find($id);
        if ($user) {
            $user->delete();
            return redirect('admin/user')->with('success', '删除成功！');
        }
    }
}
