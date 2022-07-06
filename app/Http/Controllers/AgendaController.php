<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\M_Agenda;

class AgendaController extends Controller
{
    /**
     * Display a listing of the resource. 
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = M_Agenda::all();
        return view('agenda.agenda')->with([
            'data' => $data
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('agenda.create_agenda');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = new M_Agenda();
        $data->kegiatan = $request->kegiatan;
        $data->tempat = $request->tempat;
        $data->start = $request->start;
        $data->end = $request->end;
        $data->j_kegiatan = $request->j_kegiatan;
        $data->keterangan = $request->keterangan;
        $data->save();
        toast('Data Berhasil Ditambahkan', 'Success');
        return redirect('/agenda');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = M_Agenda::find($id);
        return view('agenda.show_agenda')->with([
            'data' => $data
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        $item = M_Agenda::find($id);
        $data = $request->except(['_token']);
        $item->update($data);
        toast('Data Berhasil Diupdate', 'Success');
        return redirect('/agenda')->with(['success' => 'Data Berhasil Diubah!']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = M_Agenda::find($id);
        $item->delete();
        toast('Data Berhasil Dihapus', 'Success');
        return redirect('/agenda');
    }
}
