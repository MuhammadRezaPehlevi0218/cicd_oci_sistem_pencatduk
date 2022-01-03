<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\WilayahModel;


class SuratController extends Controller
{
    public function index(){
        return view('layout.surat');
    }

    public function __construct()
    {
        $this->WilayahModel = new WilayahModel();
        $this->middleware('auth');
    }

    public function printSKTS(){
        $data = [
            'wilayah' => $this->WilayahModel->allData(),
        ];
        return view('layout.printSKTS',$data);
    }

    public function printSKDS(){
        $data = [
            'wilayah' => $this->WilayahModel->allData(),
        ];
        return view('layout.printSKDS',$data);
    }
}
