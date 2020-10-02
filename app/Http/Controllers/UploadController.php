<?php

namespace App\Http\Controllers;

use App\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class UploadController extends Controller
{
    public function store (Request $request) {

        if ($request->hasFile('image')) {
            //  Let's do everything here
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
                $imagen->name=$nameOriniginal;
                $imagen->url=$name;
                $imagen->save();

                Session::flash('success', "Success!");
                return redirect('imagenes');
            }
        }
        abort(500, 'Could not upload image :(');
    }

    public function form_upload() {
        return view('modules.form_uploads');
    }
    public function views_uploads(){
        $images = File::all();
        return view('modules.view_uploads')->with('images', $images);    
    }
}