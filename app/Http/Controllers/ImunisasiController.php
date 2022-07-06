<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\M_Imun;

class ImunisasiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response 
     */
    public function index()
    {
        $data = M_Imun::all();
        return view('posimun.imun')->with([
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
        return view('posimun.create_imun');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = new M_Imun();
        $data->nama_anak = $request->nama_anak;
        $data->j_imun = $request->j_imun;
        $data->tgl_imun = $request->tgl_imun;
        $data->booster = $request->booster;
        $data->ket_imun = $request->ket_imun;
        $data->save();
        toast('Data Berhasil Ditambahkan', 'Success');
        return redirect('/imunisasi');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = M_Imun::find($id);
        return view('posimun.show_imun')->with([
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
        $item = M_Imun::find($id);
        $data = $request->except(['_token']);
        $item->update($data);
        toast('Data Berhasil Diupdate', 'Success');
        return redirect('/imunisasi');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = M_Imun::find($id);
        $item->delete();
        toast('Data Berhasil Dihapus', 'Success');
        return redirect('/imunisasi');
    }
}
