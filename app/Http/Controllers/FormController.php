<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\Auth;

class FormController extends Controller
{
    public function store(Request $request)
    {
        // Validate the form data
        $validatedData = $request->validate([
            // Define your validation rules here
            // Example:
            'name' => 'required|min:5|max:255',
            'alamat' => 'required|min:1|max:355',
            'nohp' => 'required|min:11|max:13',
            'tanggal_lahir' => 'required',
            'asalsekolah' => 'required',
            'kelas' => 'required|max:30',
            'gender' => ['required', 'string', 'in:Laki-laki,Perempuan'],

            'namaOrtu' => ['required', 'string'],
            'pekerjaanOrtu' => ['required', 'string'],
            'alamatOrtu' => ['required', 'string'],
            'teleponOrtu' => ['required', 'string'],

            'jenjang' => ['required', 'string'],
            'program' => ['required', 'string'],
            'kampusJurusan' => ['required', 'string'],
            'kota' => ['required', 'string'],

            'jumlahSiswa' => ['required', 'string', 'in:1,2,3-6,7-14'],


        ]);

        $formData = $request->all();

        // Debugging: Dump the form data
        dd($formData);

        // Pass the form data to the PDF view
        $pdf = PDF::loadView('pdf.usersPdf', compact('formData'));

        // Debugging: Dump the PDF object
        dd($pdf);

        // Download the PDF or return it as a response
        return $pdf->download('user_data.pdf');
    }
}
