<?php

namespace App\Http\Controllers;
use SimpleSoftwareIO\QrCode\Facades\QrCode;
use App\Models\Warranty;
use Illuminate\Http\Request;
use App\Models\User;
use PDF;

class PrintController extends Controller
{    
    public function index($id,Request $request)
	{
	    $data = Warranty::find($id);

	   //  $data = [
	   //          'title' => 'How To Create PDF File Using DomPDF In Laravel 9 - Techsolutionstuff',
	   //          'date' => date('d/m/Y'),
	   //          'users' => $users
	   //  ];
      // QrCode::generate('Make me into a QrCode!');
      
	        $pdf = PDF::loadView('welcome2',compact('data'));
	        return $pdf->download('users_pdf_example.pdf');
	    return view('welcome',compact('data'));
	}
}
