<?php

namespace App\Http\Controllers;

use App\Http\Requests\SaveProjectRequest;
use App\Project;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $portfolio = [
        //     ['title' => 'Proyecto #1'],
        //     ['title' => 'Proyecto #2'],
        //     ['title' => 'Proyecto #3'],
        //     ['title' => 'Proyecto #4']
        // ];

        //  Project::orderBy('created_at','DESC')->get(); // es lo mismo utilizar latest sin parametros
        // $portfolio = Project::latest('updated_at')->get();
        $projects = Project::latest('updated_at')->paginate();// por defecto son 15

        return view('projects.index', compact('projects'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('projects.create',[
            'project' => new Project
        ]);
        // return redirect()->route('projects.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SaveProjectRequest $request)
    {
        // return request();
        // Project::create([
        //     'title' =>  request('title'),
        //     'description' =>  request('description'),
        // ]);
        // como las propiedades tienen el mismo nombre se pueden enviar todas
        // Project::create(request()->all()); // en el modelo -> protected $fillable = ['title','url','description'];

        // $fields = request()->validate([
        //     'title'         =>  'required',
        //     'url'           =>  'required',
        //     'description'   =>  'required',
        // ]);

        Project::create($request->validated());
        return redirect()->route('projects.create')->with('status', __('Project created'));// falto agregar el mensaje de session en las demas funciones
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('projects.show', [
            'project' => Project::findOrFail($id)
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('projects.edit', [
            'project' => Project::findOrFail($id)
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(SaveProjectRequest $request, Project $project)
    {
        $project->update($request->validated());
        return redirect()->route('projects.show', $project);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Project $project)
    {
        //Project::destroy($id);
        $project->delete();
        return redirect()->route('projects.index');
    }
}
