<?php

namespace App\Http\Controllers;
use App\Events\MessageSent;

use Illuminate\Http\Request;

class PusherController extends Controller
{
    public function kirimPertanyaan()
    {
        event(new MessageSent('hello world'));
    }
}
