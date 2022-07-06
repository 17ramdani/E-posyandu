<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\M_Anak;
use App\Models\User;

class AnakController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response 
     */
    public function index()
    {
        $data = M_Anak::all();
        return view('posyandu.anak')->with([
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
        return view('posyandu.create_anak');
    }

    /** 
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     * 
     * 
     */

    public function search(Request $request)
    {
        $keyword = $request->search;
        $data = M_Anak::where('name', 'like', "%" . $keyword . "%")->paginate(5);
        return view('users.index', compact('users'))->with('i', (request()->input('page', 1) - 1) * 5);
    }
    /** 
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     * 
     * 
     */


    public function store(Request $request)
    {
        $data = new M_Anak();
        $data->nama_anak = $request->nama_anak;
        $data->tempat_lhr = $request->tempat_lhr;
        $data->tgl_lhr = $request->tgl_lhr;
        $data->bb_lahir = $request->bb_lahir;
        $data->tb_lahir = $request->tb_lahir;
        $data->jenis_kelamin = $request->jenis_kelamin;
        $data->anak_ke = $request->anak_ke;
        $data->jenis_persalinan = $request->jenis_persalinan;
        $data->tempat_persalinan = $request->tempat_persalinan;
        $data->dokter = $request->dokter;
        $data->NIK_anak = $request->NIK_anak;
        $data->BPJS_anak = $request->BPJS_anak;
        $data->save();
        toast('Data Berhasil Ditambahkan', 'Success');
        return redirect('/anak');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = M_Anak::find($id);
        return view('posyandu.show_anak')->with([
            'data' => $data
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function lihat($id)
    {
        $data = M_Anak::find($id);
        return view('posyandu.lihat_anak')->with([
            'data' => $data
        ]);
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
        $item = M_Anak::find($id);
        $data = $request->except(['_token']);
        $item->update($data);
        toast('Data Berhasil Diupdate', 'Success');
        return redirect('/anak')->with(['success' => 'Data Berhasil Diubah!']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = M_Anak::find($id);
        $item->delete();
        toast('Data Berhasil Dihapus', 'Success');
        return redirect('/anak');
    }
}
