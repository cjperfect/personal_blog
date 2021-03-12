<?php

namespace App\Http\Controllers\Back;

use App\Models\setting;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class SettingController extends BackController
{
    public function show()
    {
        $data = Setting::all()->first();
        return view('admin/setting', compact('data'));
    }

    public function editconfig(Request $request)
    {
        $validate = Validator::make($request->all(), [
            'keyword' => 'required',
            'description' => 'required',
            'email' => 'required|email',
            'address' => 'required',
            'phone' => 'required',
            'copyright' => 'required'
        ]);
        if ($validate->passes()) {
            $input = $request->except('id', '_token');
            $userUpdate = Setting::find($request['id'])->update($input);
            if ($userUpdate) {
                return redirect('admin/config')->with('success', '修改成功!');
            }
        }
        return redirect('admin/config')
            ->withErrors($validate)
            ->withInput();
    }

}
