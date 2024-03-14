<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Admin extends Controller
{
    //
    public function loginPetugas()
    {
        return view('admin.petugaslogin');
    }
    public function loginAdmin()
    {
        return view('admin.login');
    }
    public function cekAdmin(Request $request)
    {
        $p = new \App\Models\Admin();
        $p = $p->where('Username', $request->input('Username'))->where('Password', $request->input('Password'));
// ddd($p);
        if($p->exists()) {
            session([
                'Username' => $request->input('Username'),
                'Password' => $request->input('Password'),
            ]);
            return redirect('dashboard/admin');
        }
        return back();
    }

    public function simpan(Request $request)
    {
        $s = new \App\Models\Admin();

        $s->create([
            'AdminID' => $request->AdminID,
            'Username' => $request->Username,
            'Password' => $request->Password
        ]);

        return redirect('login/admin');
    }

    public function simpanbuku(Request $request)
    {
        $s = new \App\Models\buku();

        $s->create([
            'BukuID' => $request->BukuID,
            'Judul' => $request->Judul,
            'Penulis' => $request->Penulis,
            'Penerbit' => $request->Penerbit,
            'TahunTerbit' => $request->TahunTerbit
        ]);

        return redirect('registrasi/buku ');
    }

    public function regis2()
    {
        return view('admin.regis');
    }

    public function dasbor()
    {
        return view('admin.dashboard');
    }

    public function cc()
    {
        return view('admin.pendataanbuku');
    }

    }
