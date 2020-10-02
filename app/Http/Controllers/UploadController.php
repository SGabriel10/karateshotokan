<?php

namespace App\Http\Controllers;

use App\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class UploadController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function index(){
        $images = File::all();
        return view('publicidad.index')->with('imagenes', $images);;
    }
    public function store (Request $request) {
        if ($request->hasFile('image')) {
            if ($request->file('image')->isValid()) {
                //
                $rules = [
                    'name' => 'string|max:40',
                    'image' => 'mimes:jpeg,png|max:1014',
                ];
                $messages = [
                    'name.required' => 'Agrega el titulo.',
                    'image.required' =>'No puede ser vacio el campo descripcion'
                ];
                
                $this->validate($request,$rules,$messages);
                $image= $request->file('image');
                $nameOriniginal= $request->file('image')->getClientOriginalName();
                $name = $nameOriniginal.'.'.$image->getClientOriginalExtension();
                $destinationPath = public_path('/images');
                $image->move($destinationPath, $name);
                var_dump($request->file('image'));
                $imagen= new File();
                $imagen->name=$request->name;
                $imagen->url=$name;
                $imagen->save();
                return back()->with('mensaje','Publicidad Cargada');
            }
        }
        abort(500, 'Could not upload image :(');
    }

    public function form_upload() {
        return view('publicidad.form_uploads');
    }
    public function views_uploads(){
        $images = File::all();
        return view('publicidad.list_publisher')->with('images', $images);    
    }
}