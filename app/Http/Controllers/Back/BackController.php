<?php
namespace App\Http\Controllers\Back;

use App\Models\Admin;
use App\Models\Note;
use App\Models\Photo;
use App\Models\Setting;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class BackController extends Controller
{
    public function __construct(Request $request)
    {

    }

    public function index()
    {
        $countUsers = Admin::all()->count();
        $countNotes = Note::all()->count();
        $countPhoto = Photo::all()->count();
        $visited = Setting::first()->visited;
        return view('admin/admin', compact('countUsers', 'countNotes', 'countPhoto', 'visited'));
    }


}
