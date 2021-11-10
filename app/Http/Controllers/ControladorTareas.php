<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControladorTareas extends Controller
{
    public function show()
    {
        return view('tarea');
    }
}
