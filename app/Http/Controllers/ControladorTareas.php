<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class ControladorTareas extends Controller
{
    public function show()
    {
        $users = DB::table('tablaTareas')->get();

        return view('tarea', ['tareas' => $users]);

    }
    public function añadir(Request $request)
    {


        return redirect('/');
    }
    public function borrar($id)
    {


        return redirect('/');
    }
}
