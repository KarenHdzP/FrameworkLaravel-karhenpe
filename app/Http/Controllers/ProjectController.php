<?php

namespace App\Http\Controllers;
use App\Project;
use Illuminate\Http\Request;
use App\Http\Requests\SaveProjectRequest;


class ProjectController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth')->except('index','show');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   /* 
        *$portfolio=Project::latest()->paginate();//crear paginacion
        *$portfolio=Project::orderBy('created_at','DESC')->get(); //orderBy ordena  de manera ascendente
        */
      return view('projects.index',[
         'projects'=>Project::latest()->paginate()//Se crea un arreglo , eingresamos los proyectos paginados
      ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('projects.create',[
            'project'=>new project
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SaveProjectRequest $request)
    {
            
        Project::create($request->validated());
        
        return redirect()->route('projects.index')->with('status',__('Pce'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Project $project)
    {
       // $project= Project::find($id);//Muestra el contenido de la busqueda por $id
       /* return view('projects.show',[
            'project'=>Project::findOrfail($id)
        ]);
        */
        return view('projects.show',[ //Route Model Binding
            'project'=>$project
        ]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Project $project)
    {
        return view('projects.edit',[ //Route Model Binding
            'project'=>$project
        ]);
    }   

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Project $project,SaveProjectRequest $request)
    {
       /* 
       Mandando como parametro Project $project
            $project->update([
            'title'=>request('title'),
            'url'=>request('url'),
            'description'=>request('description'),
        ]);
        */
        $project->update($request->validated());
        return redirect()->route('projects.show',$project)->with('status',__('Pae'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Project $project)
    {
        $project->delete();
        
        return redirect()->route('projects.index')->with('status',__('Pee'));
    }
}
