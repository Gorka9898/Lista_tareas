<?php

namespace App\Http\Controllers;

use App\Models\Tarea;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class ControladorTareas extends Controller
{
 

    public function anadir(Request $request)
    {

        $validatedData = $request->validate([ 
            'tarea1' => ['required'], 
            ]); 

        
                    DB::table('tablaTareas')->insert([
            'nombre' => $request->get('tarea1')
        ]);
        return redirect('/');
        
        

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
