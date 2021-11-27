<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Arisan;

class ArisanController extends Controller
{
    private $arisan;

    public function __construct()
    {
        $this->arisan = new Arisan;
    }

    public function index()
    {
        $data['arisan'] = $this->arisan->get();
        return view('panitia.arisan.index', $data);
    }

    public function create()
    {
        return view('panitia.arisan.create');
    }

    public function store(Request $request)
    {
        $this->arisan->nama_arisan    = $request->nama_arisan;
        $this->arisan->jumlah_anggota = $request->jumlah_anggota;
        $this->arisan->periode        = $request->periode;
        $this->arisan->iuran          = $request->iuran;
        $this->arisan->deskripsi      = $request->deskripsi;
        $this->arisan->created_at     = date('Y-m-d h:i:s');
        $this->arisan->save();

        return redirect('panitia/arisan')->with('sukses', 'Berhasil tambah arisan');
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
