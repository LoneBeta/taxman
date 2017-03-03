<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProjectController extends Controller
{
	public function index()
	{
		$data['projects'] = \App\Models\Project::all();

		return view('project/index',$data);
	}

	public function create()
	{
		$data['customers'] = \App\Models\Customer::all();
		$data['items'] = \App\Models\Item::all();

		return view('project/create', $data);
	}

	public function view(\App\Models\Project $project)
	{
		$data['project'] = \App\Models\Project::find($id);

		return view('project/view', $data);
	}

 	public function edit(\App\Models\Project $project)
 	{
		$data['customers'] = \App\Models\Customer::all();
 		$data['project'] = $project;

 		return view('project/edit', $data);
 	} 	

    public function store(Request $request)
 	{
 		$project = new \App\Models\Project($request->all());
 		$project->save();

 		return redirect('/projects/');
 	}

 	public function update(\App\Models\Project $project, Request $request)
 	{
 		$project->name = $request->name;
 		$project->update();

 		return redirect('/projects/');
 	}

 	public function destroy(Request $request)
 	{
 		$project = \App\Models\Project::destroy($request->id);

 		return view('/project/');
 	}
}
