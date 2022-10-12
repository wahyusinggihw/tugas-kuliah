<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DateTime;

class HomeController extends Controller
{
    //
    public static function index()
    {
        return view('home',[
            'title' => 'Home',
            'active' => 'home'
        ]);
    }
    
    public function usia($tanggalLahir)
    {
        $birthDate = new DateTime($tanggalLahir);
        $today = new DateTime("today");
        $y = $today->diff($birthDate)->y;
        return $y;
    }

    public function form(Request $request)
    {
        // $data = $request->validate([
        //     'nama' => 'required',
        //     'tempatLahir'=>'required',
        //     'tanggalLahir'=>'required',
        //     'jenisKelamin'=> 'required',
        //     'prodi'=> 'required',
        //     'hobi'=>'required',
        // ]);
        $usia = $this->usia($request->tanggalLahir);
        // dd($usia);

            $data = [
                'nama' => $request->nama,
                'tempatLahir'=>$request->tempatLahir,
                'tanggalLahir'=>$request->tanggalLahir,
                'usia'=> $usia,
                'gender'=>$request->gender,
                'prodi'=>$request->prodi,
                'hobi'=>$request->hobi,
                'alamat'=>$request->alamat,
            ];

        
        session()->flash('result',$data);
        return redirect('/result');

    }
}
