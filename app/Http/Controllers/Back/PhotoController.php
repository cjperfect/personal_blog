<?php

namespace App\Http\Controllers\Back;

use App\Models\Photo;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class PhotoController extends BackController
{
    public function show()
    {
        $photo = Photo::orderby('updated_at', 'desc')->paginate(12);
        return view('admin/photo', compact('photo'));
    }

    public function addHtml()
    {
        return view("admin/photoadd");
    }

    public function photoadd(Request $request)
    {
        $validate = Validator::make($request->all(), [
            'title' => 'required',
            'pic' => 'required',
            'pic.*' => 'required|image',
            'author' => 'required',
            'photoAddress' => 'required',
            'photoTime' => 'required|date',
            'description' => 'required'
        ]);
        if ($validate->passes()) {
            $files = $request->file('pic');
            $input = $request->except('_token');
            foreach ($files as $file) {
                $path = Storage::putFile('photos', $file);
                $input['pic'] = $path;
                Photo::create($input);
            }
            return redirect('admin/photo')->with('success', '添加成功!');
        }
        return redirect('admin/photoadd')
            ->withErrors($validate)
            ->withInput();


    }

    public function photodel($id)
    {
        $data = Photo::find($id);
        $picPath = $data->pic;
        Storage::delete($picPath);
        $data->delete();
        return redirect('admin/photo')->with('success', '删除成功！');
    }

    public function photodelselect(Request $request)
    {
        $id = $request['id'];
        foreach ($id as $v) {
            $photo = Photo::find($v);
            $picPath = $photo->pic;
            Storage::delete($picPath);
            $photo->delete();
        }
        return redirect('admin/photo')->with('success', '删除成功！');
    }

    public function editHtml($id)
    {
        $photo = Photo::find($id);
        return view('admin/photoedit', compact('photo'));
    }

    public function photoedit(Request $request)
    {

        $photo = Photo::find($request['id']);
        $validate = Validator::make($request->all(), [
            'title' => 'required',
            'pic' => 'image',
            'author' => 'required',
            'photoAddress' => 'required',
            'photoTime' => 'required|date',
            'description' => 'required'
        ]);
        if ($validate->passes()) {
            $input = $request->except('_token', 'id');
            if ($request->file('pic')) {
                Storage::delete($photo->pic);
                $path = Storage::putFile('photos', $request->file('pic'));
                $input['pic'] = $path;
            }
            $photo->update($input);
            return redirect('admin/photo');
        }
        return redirect('admin/photoedit/' . $request['id'])
            ->withErrors($validate)
            ->withInput();

    }
}
