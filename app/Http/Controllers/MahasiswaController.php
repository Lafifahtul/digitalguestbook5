<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mahasiswa;
use symfony\Contracts\Service\Attibute\Required;

class MahasiswaController extends Controller
{
    public function index(){

        $mahasiswas = Mahasiswa::all();

        return view('mahasiswa.index',compact('mahasiswas'));
    }
    public function create(){
        return view('mahasiswa.create');
    }
    public function store(Request $request){

    }
    public function edit($id){

}
}