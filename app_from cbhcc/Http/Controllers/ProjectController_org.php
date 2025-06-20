<?php

namespace App\Http\Controllers;

use App\Models\project;
use Illuminate\Http\Request;
use App\Http\Requests\StoreprojectRequest;
use App\Http\Requests\UpdateprojectRequest;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //

    

        //dd($project);
       return view('project.project');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
         $project = project::UpdateOrCreate([
        //'project_id'=>request('project_id'),
        'project_name'=>request('project_name'),
        'project_code'=>request('project_code'),      
        'region'=>request('region'),
        'district'=>request('district'),       
        'start_date'=>request('start_date'),       
      
        ]);
         return redirect('/project');
    }

    /**
     * Display the specified resource.
     */
    public function show(project $project)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(project $project)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateprojectRequest $request, project $project)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(project $project)
    {
        //
    }
}
