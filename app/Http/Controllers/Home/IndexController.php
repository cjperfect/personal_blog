<?php

namespace App\Http\Controllers\Home;

use App\Models\Description;
use App\Models\Note;
use App\Models\Photo;
use App\Models\Setting;
use App\Models\Us;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Mail;

class IndexController extends Controller
{
    public function __construct()
    {
        $data = Description::all()->first();
        $setting = Setting::all()->first();
        view()->share([
            'data' => $data,
            'setting' => $setting
        ]);
    }

    public function index()
    {
        Setting::all()->first()->increment('visited');
        $us = Us::first();
        $photo = Photo::orderBy('photoTime', 'desc')->take(8)->get();
        $showHomeNotes = Note::where('isShowHome', '1')->orderBy('updated_at', 'desc')->take(6)->get();
        $notes = Note::where('isShowHome', '0')->orderBy('updated_at', 'desc')->get();
        return view("home/index", compact('us', 'photo', 'showHomeNotes', 'notes'));
    }

    public function detailHtml($id)
    {
        $note = Note::find($id);
        $latest = Note::orderBy('updated_at', 'desc')->take(5)->get();
        $hotest = Note::orderBy('hot', 'desc')->take(5)->get();
        $prev_note = Note::where('id', '<', $id)->orderBy('id', 'desc')->first();
        $next_note = Note::where('id', '>', $id)->orderBy('id', 'asc')->first();
        if ($note) {
            $note->increment('hot');
            return view("home/detail", compact('note', 'prev_note', 'next_note', 'latest', 'hotest'));
        } else {
            echo "404 page";
        }

    }

    public function photo()
    {
        Paginator::defaultView('vendor.pagination.default');
        $photo = Photo::orderBy("updated_at", "desc")->paginate(12);
        return view('home/photo', compact('photo'));
    }

    public function notes()
    {
        Paginator::defaultView('vendor.pagination.default');
        $notes = Note::orderBy('updated_at', 'desc')->paginate(6);
        return view('home/notes', compact('notes'));
    }

    public function contact(Request $request)
    {
        $descEmail = Setting::all()->first()->email;
        $subject = $request['subject'];
        Mail::send('mail.index',
            [
                'subject' => $request['subject'],
                'content' => $request['message'],
                'contact' => $request['email']
            ],
            function ($message) use ($subject, $descEmail) {
                $to = $descEmail;
                $message->to($to)->subject($subject);
            });
        return back();
    }

}
