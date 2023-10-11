<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class QrcodeController extends Controller
{
    public function view(){
       // $img = public_path(URL::to('/')/images/stackoverflow.png);
        return view('qr');
    }
}
