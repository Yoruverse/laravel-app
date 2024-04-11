<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServerController extends Controller
{
    public function index($id = null)
    {

        if (!$id) {
            return view('server.index');
        } else {
            return view('server.show', ["id" => $id]);
        }

    }
}
