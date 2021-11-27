<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class ProfileController extends Controller
{
    private $user;

    public function __construct()
    {
        $this->user = new User;
    }

    public function index()
    {
        $data   = auth()->user();
        return view('panitia.profile', $data);
    }

    public function update(Request $request)
    {
        $user = $this->user->find(auth()->user()->id);

        $user->nama_lengkap     = $request->nama_lengkap;
        $user->nik              = $request->nik;
        $user->tempat           = $request->tempat_lahir;
        $user->tanggal_lahir    = $request->tanggal_lahir;
        $user->username         = $request->username;
        $user->no_telepon       = $request->no_telepon;
        $user->jenis_kelamin    = $request->jenis_kelamin;
        $user->alamat           = $request->alamat;
        if ($request->password) {
            $user->password = Hash::make($request->password);
        }
        $user->updated_at   = date('Y-m-d h:i:s');
        $user->save();

        return redirect('/panitia/profile')->with('sukses', 'Berhasil edit profile');
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
