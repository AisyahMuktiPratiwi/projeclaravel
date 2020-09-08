<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller
{
    //ini tampilan fuction index
    public function index()
    {
        //echo "<h1>Hello Word, Dari Controller !!</h1>";
        //$nama = "Aisyah Mukti Pratiwi";
        //$pelajaran =["PWPB","ALGORITMA","PD","BD","PBO"];
        //return view('hello.index', compact('nama','pelajaran'));
        $nama = "Aisyah Mukti Pratiwi";
        $pelajaran =["PWPB","ALGORITMA","PD","BD","PBO"];
        return view('hello.index', ['nama'=> $nama, 'pelajaran'=> $pelajaran]);
    }
}
