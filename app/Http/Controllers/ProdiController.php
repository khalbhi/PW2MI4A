<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProdiController extends Controller
{

    function index(){
        $data = [
            'prodi' => ['Manajemen Informatika', 'Sistem Informasi', 'Informatika']
        ];
    
        //atau menggunakan compact
        $prodi = ['Manajemen Informatika', 'Sistem Informasi', 'Informatika'];
        $kampus = "Universitas Multi Data Palembang";
    
        return view("prodi.index", compact('prodi', 'kampus'));
    }

    function detail($id = null){
        echo $id;
    }
}
