<?php

namespace App\Http\Controllers;

// use App\Events\MessageSent;
use App\Events\MessageSent;
use App\Models\Team;
use App\Models\Participant;
use Illuminate\Http\Request;
use App\Models\TemaPertanyaan;
use Illuminate\Support\Carbon;

class TemaPertanyaanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $tema = TemaPertanyaan::where('sesi', 1)->latest()->get();
        $team = Team::all();
        $date = Carbon::now()->format('Y-m-d');
        $participant = Participant::where('tanggal', $date)->get();

        return view('operator.jenispertanyaan.index', compact('tema', 'team', 'participant', 'date'));
    }

    public function sesi2()
    {
        $tema = TemaPertanyaan::where('sesi', 2)->latest()->get();
        $team = Team::all();
        return view('operator.jenispertanyaan.sesi2', compact('tema', 'team'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'tema' => 'required'
        ],[
            'tema' => 'Input Tema'
        ]);

        $Newtema = new TemaPertanyaan();
        $Newtema->tema = $request->tema;
        $Newtema->sesi = $request->sesi;

        $Newtema->save();

        if ($request->sesi == "1") {
            return redirect('/op/sesi-1');
        }else{
            return redirect('op/sesi-2');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(TemaPertanyaan $temaPertanyaan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(TemaPertanyaan $temaPertanyaan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, TemaPertanyaan $temaPertanyaan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $delete = TemaPertanyaan::find($id);
        $delete->delete();
        return back();
        
    }
}
