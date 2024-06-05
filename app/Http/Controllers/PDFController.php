<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Barryvdh\DomPDF\Facade\Pdf;

class PDFController extends Controller
{
    public function pdf(){

        return view('pdf.usersPdf');
    }

    public function generatePDF()
    {
        function generateIncrement() {
            static $counter = 1;
            return $counter++;
        }

        $users = User::get();

        $data = [
            'id' => generateIncrement(),
            'title' => 'RBS - Rumah Belajar Spirit',
            'date' => date('d/m/Y'),
            'users' => $users
        ];



        $pdf = PDF::loadView('pdf.usersPdf', $data);
        return $pdf->download('invoice-pembayaran-RBS.pdf');
    }
}
