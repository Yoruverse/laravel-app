<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $server = [
            "count" => 4,
            "troncals" => 8,
        ];

        $projects = [
            "count" => 16,
            "campains" => 32,
        ];

        $ddis = [
            "count" => 64,
            "spam" => 0,
        ];

        return view('home', compact('server', 'projects', 'ddis'));

    }
}
