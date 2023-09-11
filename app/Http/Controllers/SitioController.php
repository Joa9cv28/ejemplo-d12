<?php

namespace App\Http\Controllers;
use App\Models\Contacto;
use Illuminate\Http\Request;

class SitioController extends Controller
{
    //
    public function contactoForm($tipo = null){
        return view('contacto', compact('tipo'));
    }
    public function contactoSave(Request $request){
        $request -> validate([
            'correo' => 'required|email',
            'comentario' => ['required', 'min:10', 'max:50'],
            
        ]);
    
        //Es la forma más tediosa de hacerlo, es mejor hacerlo por controladores
        $contacto = new Contacto();
        $contacto -> correo = $request -> correo;
        $contacto -> comentario = $request -> comentario;
        $contacto -> save();
    
        return redirect('/contacto');
    }
}
