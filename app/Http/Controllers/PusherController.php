<?php

namespace App\Http\Controllers;
use App\Events\MessageSent;

use Illuminate\Http\Request;

class PusherController extends Controller
{
    public function kirimPertanyaan(Request $request)
    {
        event(new MessageSent($request->pertanyaan));
        return response()->json(['status' => 'success']);
    }
}
