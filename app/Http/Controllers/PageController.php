<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Noticia;
class PageController extends Controller
{
    public function index(){
        $noticias=  Noticia::paginate(3);
        return view('modules/inicio',compact('noticias'));
    }

}
