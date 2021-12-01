<?php

namespace App\Http\Controllers;

use App\Models\Tarea;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class ControladorTareas extends Controller
{
    public function show()
    {
      
        $users = DB::table('tablaTareas')->get();
        
      


        return view('tarea', ['tareas' => $users]);

    }


    public function anadir(Request $request)
    {
        // Tarea::create([
        //     'nombre' => $request->get('tarea1')
        // ]);
        
        DB::table('tablaTareas')->insert([
            'nombre' => $request->get('tarea1')
        ]);
        return redirect('/show_tasks');
    }


    public function ensenar()
    {
        {
            $users = DB::table('tablaTareas')->get();
    
            return view('tarea', ['tareas' => $users]);
    
        }
   
    
    }
    
    public function borrar( $id)
    {

        Tarea::destroy($id);


        return redirect('/');
    }
}
