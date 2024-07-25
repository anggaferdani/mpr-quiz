<?php

namespace App\Http\Controllers;
use App\Events\MessageSent;

use App\Events\Spin;
use Illuminate\Http\Request;

class PusherController extends Controller
{
    public function kirimPertanyaan(Request $request)
    {
        event(new MessageSent($request->pertanyaan));
        return response()->json(['status' => 'success']);

    }

    public function startSpin()
    {
        event(new Spin("tesing"));
        return response()->json(['status' => 'success']);

    }
}
