<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    private $user;

    public function __construct()
    {
        $this->user = new User;
    }

    public function index()
    {
        return view('register');
    }

    public function register(Request $request)
    {
        $file = $request->file('surat_komitment');
        $file->move('surat_komitment', $file->getClientOriginalName());

        $this->user->nama_lengkap       = $request->nama_lengkap;
        $this->user->nik                = $request->nik;
        $this->user->tempat             = $request->tempat_lahir;
        $this->user->tanggal_lahir      = $request->tanggal_lahir;
        $this->user->role               = $request->role;
        $this->user->username           = $request->username;
        $this->user->no_telepon         = $request->no_telepon;
        $this->user->jenis_kelamin      = $request->jenis_kelamin;
        $this->user->alamat             = $request->alamat;
        $this->user->password           = Hash::make($request->password);
        $this->user->surat_komitment    = $file->getClientOriginalName();
        $this->user->created_at         = date('Y-m-d h:i:s');
        $this->user->save();

        return redirect('/login')->with('sukses', 'Berhasil daftar');
    }
}
