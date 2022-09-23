<?php

namespace App\Http\Controllers;

use App\Events\Messages;
use Illuminate\Http\Request;

class ChatController extends Controller
{
    public function messages(Request $request)
    {
        event(new Messages($request->input('username'), $request->input('message')));
        return ['messages sent successfully'];
    }
}
