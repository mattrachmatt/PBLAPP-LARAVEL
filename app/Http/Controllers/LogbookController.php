<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Logbook;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\LogbookPostRequest;

class LogbookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $logbooks = Logbook::all();
        return view('logbooks.index', compact('logbooks'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('logbooks.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(LogbookPostRequest $request)
    {
        $logbook = new Logbook;

        # $logbook->nama_kolom_tabel = $request->attr_name_input
        $logbook->judul = $request->judul;
        $logbook->nim_ketua = $request->nim_ketua;
        $logbook->topik = $request->topik;
        $logbook->deskripsi_progress = $request->deskripsi_progress;
        
        $laporan = $request->file('file_laporan');
        if ( $laporan != NULL) {
            Storage::disk('public')->put('fileku', $laporan);
            $logbook['file_laporan'] = $laporan->hashName();
        }else{
            unset($logbook['file_laporan']);
        }

        $logbook->save();
        return redirect()->route('logbooks.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $logbook = Logbook::find($id);
        return view('logbooks.edit', compact('logbook'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $logbook = Logbook::find($id);

        # $logbook->nama_kolom_tabel = $request->attr_name_input
        $logbook->judul = $request->judul;
        $logbook->nim_ketua = $request->nim_ketua;
        $logbook->topik = $request->topik;
        $logbook->deskripsi_progress = $request->deskripsi_progress;
        
        $laporan = $request->file('file_laporan');
        if ( $laporan != NULL) {
            Storage::disk('public')->delete("fileku/$logbook->file_laporan");
            Storage::disk('public')->put('fileku', $laporan);
            $logbook['file_laporan'] = $laporan->hashName();
        }else{
            unset($logbook['file_laporan']);
        }

        $logbook->save();

        return redirect()->route('logbooks.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $logbook = Logbook::find($id);
        Storage::disk('public')->delete("fileku/$logbook->file_laporan");
       
        $logbook->delete();

        return redirect()->route('logbooks.index');
    }

    
    
}
