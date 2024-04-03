<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCurso;
use App\Models\Curso;
use Illuminate\Http\Request;
use Monolog\Handler\PushoverHandler;

class CursoController extends Controller
{
    public function index(){

        $cursos = Curso::orderBy('id', 'desc')-> paginate(6);
        
        return  view('cursos.index', compact('cursos'));
    }

    public function create(){
        return  view('cursos.create');
    }   
    public function show ($id){

        $curso = Curso::find($id);
        return  view('cursos.show', ['curso' => $curso]);
    }

    public function store( StoreCurso $request){

       Curso::create($request->all());

        return redirect()->route('cursos.index');
        
    }

    public function edit(Curso $curso){
       
       // return view('cursos.create');

        return view('cursos.edit', compact('curso'));
    }

    public function update(Request $request, Curso $curso){

        $request->validate([
            'name' => 'required | min:3',      
            'description' => 'required',
            'category' => 'required' 
        ]);

        $curso->update($request->all());
        return redirect()->route('cursos.index');
     }

     public function destroy(Curso $curso){
         $curso->delete();
       return redirect()->route('cursos.index');
    
     }
}
