<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    // Route: /students
    public function index()
    {
        $students = [
            "Andi",
            "Budi",
            "Citra",
            "Dewi"
        ];

        return response()->json([
            "status" => "success",
            "data" => $students
        ]);
    }

    // Route: /students/{nama}
    public function show($nama)
    {
        return "Halo, nama saya " . $nama;
    }
}