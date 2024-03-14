<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\buku;
use Illuminate\Http\Request;

class tampil extends Controller
{
    //
    public function tampil(){
        $s = new buku();
return view('tampil.tampilan',['buku'=>$s->paginate(10)]);
    }

    public function dataadmin(){
        $s = new Admin();
return view('tampil.tampildataadmin',['dataadmin'=>$s->paginate(10)]);
    }

}
