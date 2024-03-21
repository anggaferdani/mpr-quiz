<?php

namespace App\Http\Controllers;

use App\Models\Shotcut;
use Illuminate\Http\Request;

class ShotcutController extends Controller
{
    public function index(){
        $short = Shotcut::all();
        return view('operator.jenispertanyaan.shortcut', compact('short'));
    }

    public function store(Request $request){
        $this->validate($request,[
            'shortcut' => 'required'
        ],[
            'shortcut' => 'Input Shortcut'
        ]);

        $newShort = new Shotcut();
        $newShort->shortcut = $request->shortcut;
        $newShort->save();
        return back();
    }

    public function destroy($id){
        $delete = Shotcut::find($id);
        $delete->delete();

        return back();
    }
}
