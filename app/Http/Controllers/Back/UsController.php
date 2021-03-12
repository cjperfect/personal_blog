<?php

namespace App\Http\Controllers\Back;

use App\Models\Note;
use App\Models\Us;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class UsController extends BackController
{


    public function show()
    {
        $us = Us::all()->first();
        return view('admin/us', compact('us'));
    }

    public function usedit(Request $request)
    {
        $us = Us::find($request['id']);

        $validate = Validator::make($request->all(), [
            'heName' => 'required|string',
            'sheName' => 'required|string',
            'heDescription' => 'required',
            'sheDescription' => 'required',
            'hePic' => 'image',
            'shePic' => 'image'
        ]);
        if ($validate->passes()) {
            $input = $request->except('_token', 'id');
            if ($request->file('shePic')) {
                Storage::delete($us->shePic);
                $path = Storage::putFile('us_photo', $request->file('shePic'));
                $input['shePic'] = $path;
            }

            if ($request->file('hePic')) {
                Storage::delete($us->hePic);
                $path = Storage::putFile('us_photo', $request->file('hePic'));
                $input['hePic'] = $path;
            }


            $us->update($input);
            return redirect('admin/us')->with('success', '修改成功！');
        }
        return redirect('admin/us')
            ->withErrors($validate)
            ->withInput();
    }
}
