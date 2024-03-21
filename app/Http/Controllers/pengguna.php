<?php

namespace App\Http\Controllers;

use App\Models\peminjaman;
use App\Models\User;
use App\Models\users;
use Illuminate\Http\Request;

class pengguna extends Controller
{
    //

    public function tampilan()
    {
        return view('User.Tampilan');
    }

    public function login()
    {
        return view('User.Login');
    }

    public function daftar()
    {
        return view('User.Daftar');
    }

    public function dashboard()
    {
        return view('User.Dashboard');
    }

    public function profil()
    {
        return view('User.Profil');
    }

    public function tampilprofil(){
        $s = new users();
return view('User.Profil',['profil'=>$s->paginate(1)]);
    }

    public function cekValidasi(Request $request, $PeminjamanID )
    {
        $m = new peminjaman();
        $m->find($PeminjamanID )->update(['StatusPeminjaman' => 'pinjam']);
        return back()->with('pesan', 'Selamat, peminjaman berhasil');
    }

    public function validasi()
    {
        $m = new peminjaman();
        return view('User.Dashboard', ['bolo' => $m->all()]);
    }

    public function logika(Request $request)
    {

        $p = new users();

        $p = $p->where('Username', $request->input('Username'))->where('Password', $request->input('Password'));

        if ($p->exists()) {

            session([

                'Username' => $request->input('Username'),

                'Password' => $request->input('Password'),
            ]);

            return redirect('dashboard/pengguna');

        }

    }

    public function logikaa(Request $request)
    {
        $N = new users();
        $N->create([
            'UserID' => $request->UserID,
            'Username' => $request->Username,
            'Password' => $request->Password,
            'Email' => $request->Email,
            'NamaLengkap' => $request->NamaLengkap,
            'Alamat' => $request->Alamat,
        ]);

        return redirect('login/pengguna');
    }

}
