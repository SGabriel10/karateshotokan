<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Noticia;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Validator;
class NoticesController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }
    public function list(){
        $noticias=  Noticia::all();
        return view('noticias.index',compact('noticias'));    
    }

    public function new(){
        return view('noticias.new');
   }

    public function show($id){
        $noticia = Noticia::findOrFail($id);
        return view('noticias.show',compact('noticia'));
    }
  
    public function post_notice(Request $request){
        $notice=new Noticia;
        $rules = [
            'titulo' => 'required',
            'descripcion' => 'required',
        ];
        $messages = [
            'titulo.required' => 'Agrega el titulo.',
            'descripcion.required' =>'No puede ser vacio el campo descripcion'
        ];

        $this->validate($request,$rules,$messages);

        $notice->titulo=$request->titulo;
        $notice->descripcion=$request->descripcion;
        $notice->save();
        return redirect('noticias')->with('mensaje','noticia publicada');
   }
   public function edit_notice($id){
    $notice= Noticia::findOrFail($id);
    return view('noticias.edit',compact('notice'));
}
    public function update(Request $request, $id){
        $actualizar=Noticia::findOrFail($id);
        $actualizar->titulo=$request->titulo;
        $actualizar->descripcion=$request->descripcion;
        $actualizar->save();
        return back()->with('mensaje','noticia Actualizada');
    }
    public function eliminar($id){
        $item=Noticia::findOrFail($id);
        $item->delete();
        return back()->with('mensaje','noticia eliminada');       
    }
}
