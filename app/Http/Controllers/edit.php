<?php

namespace App\Http\Controllers;

use App\Models\buku;
use Illuminate\Http\Request;

class edit extends Controller
{
    //

    public function edit($BukuID){
        $buku = new buku();
        return  view ('edit.editbuku',['databuku'=>$buku->find($BukuID)]);
    }

}
