<?php
use App\Curso;
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CursoController extends Controller
{
    //
    public function index(){

      $cursos=Cursos::all();
         return view('curso.index', compact('cursos'));
    }
}
