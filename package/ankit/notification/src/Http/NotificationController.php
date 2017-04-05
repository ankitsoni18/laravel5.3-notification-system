<?php

namespace ankit\notification\Http;

use ankit\notification\Notification;
use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class NotificationController extends Controller
{
    public function index()
    {
        $size = "15";
        $items = Notification::latest()->orderBy('created_at', 'desc')->paginate($size);
        return view('notification::index', compact('items', 'size'));
    }

    public function create()
    {
        return view('notification::create');
    }

    public function store(Request $request)
    {
        $users = User::all();
        if (count($users) > 0) {
            foreach ($users as $user) {
                $user->notifications()->create([
                    'title' => $request->get('title'),
                    'body' => $request->get('body'),
                    'user_id' => $user->id,
                ]);
            }
            Session::flash('send_notification', 'Notification Send Successfully');
            return redirect(route('notifications.create'));
        } else {
            Session::flash('no_user_found', 'No User Found To Send Notification');
            return redirect(route('notifications.create'));
        }

    }
}
