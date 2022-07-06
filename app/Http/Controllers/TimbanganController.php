<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\M_Timbang;

class TimbanganController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = M_Timbang::all();
        return view('postim.timbangan')->with([
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
        return view('postim.create_timbangan');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = new M_Timbang();
        $data->nama_anak = $request->nama_anak;
        $data->umur = $request->umur;
        $data->bb = $request->bb;
        $data->tb = $request->tb;
        $data->tgl_timbang = $request->tgl_timbang;
        $data->status_gizi = $request->status_gizi;
        $data->ket_timbang = $request->ket_timbang;
        $data->ind_naik = $request->ind_naik;
        $data->ind_t_lalu = $request->ind_t_lalu;
        $data->ind_b_lalu = $request->ind_b_lalu;
        $data->save();
        toast('Data Berhasil Ditambahkan', 'Success');
        return redirect('/timbangan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = M_Timbang::find($id);
        return view('postim.show_timbangan')->with([
            'data' => $data
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     * 
     * 
     */

    public function lihat($id)
    {
        $data = M_Timbang::find($id);
        return view('postim.lihat_timbangan')->with([
            'data' => $data
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     
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
        $item = M_Timbang::find($id);
        $data = $request->except(['_token']);
        $item->update($data);
        toast('Data Berhasil Diupdate', 'Success');
        return redirect('/timbangan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = M_Timbang::find($id);
        $item->delete();
        toast('Data Berhasil Dihapus', 'Success');
        return redirect('/timbangan');
    }
}
