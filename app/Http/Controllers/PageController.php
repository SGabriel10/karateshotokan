<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Noticia;
use App\File;

class PageController extends Controller
{
    public function index(){
        $noticias=  Noticia::paginate(3);
        $images= File::all();
        return view('modules/inicio',compact('noticias'))->with('images', $images);
    }

}
