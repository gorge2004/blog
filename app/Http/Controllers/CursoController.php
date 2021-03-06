<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreRequest;
use App\Models\Curso;
use Illuminate\Http\Request;

class CursoController extends Controller
{
	public function index(){
        $cursos = Curso::orderBy('id', 'desc')->paginate();
        return view('cursos.index', compact("cursos"));

	}
	public function create(){
		return view('cursos.create');
    }
    public function store(StoreRequest $request){

        $curso = new Curso();
        $curso->name = $request->name;
        $curso->description = $request->description;
        $curso->category = $request->category;
        $curso->save();
        return redirect()->route('cursos.show', $curso);
	}
	public function show(curso $curso){
        //['curso' => $cursos, 'categoria'=>$categoria]
        // $curso = Curso::find($id);
		return view('cursos.show', compact('curso'));
    }
    public function edit(Curso $curso){
        return view('cursos.edit',compact('curso'));
    }
    public function update(Request $request,curso $curso){
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'category' => 'required'
        ]);
        $curso = new Curso();
        $curso->id = $request->id;
        $curso->name = $request->name;
        $curso->description = $request->description;
        $curso->category = $request->category;
        $curso->save();
        return redirect()->route('cursos.show', $curso);

    }
}
