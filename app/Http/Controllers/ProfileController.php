<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index()
    {
        $profile = [
            "name" => "Nama Kamu",
            "title" => "Web Developer",
            "bio" => "Sedang belajar Laravel",
            "skills" => ["PHP", "Laravel", "MySQL"],
            "social" => [
                "Github" => "https://github.com",
                "LinkedIn" => "https://linkedin.com"
            ]
        ];

        return view('profile.index', compact('profile'));
    }

    public function about()
    {
        $about = [
            "education" => "Mahasiswa / Programmer",
            "hobby" => ["Coding", "Gaming", "Belajar"]
        ];

        return view('profile.about', compact('about'));
    }

    public function portfolio()
    {
        $projects = [
            [
                "title" => "Website Blog",
                "tech" => "Laravel + MySQL"
            ],
            [
                "title" => "Todo App",
                "tech" => "PHP + Bootstrap"
            ]
        ];

        return view('profile.portfolio', compact('projects'));
    }
}