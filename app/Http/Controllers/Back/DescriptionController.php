<?php

namespace App\Http\Controllers\Back;

use App\Models\Description;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class DescriptionController extends BackController
{
    public function show()
    {
        $data = Description::all()->first();
        return view('admin/desc', compact('data'));
    }

    public function editdesc(Request $request)
    {
        $validate = Validator::make($request->all(), [
            'banner' => 'required',
            'important_time' => 'required|date',
            'gallery' => 'required',
            'loveNote' => 'required',
            'contact' => 'required'
        ]);
        if ($validate->passes()) {
            $input = $request->except('id', '_token');
            $userUpdate = Description::find($request['id'])->update($input);
            if ($userUpdate) {
                return redirect('admin/desc')->with('success', '修改成功!');
            }
        }
        return redirect('admin/desc')
            ->withErrors($validate)
            ->withInput();
    }


}
