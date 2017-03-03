<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SupplierController extends Controller
{
	public function index()
	{
		$data['suppliers'] = \App\Models\Supplier::all();

		return view('supplier/index',$data);
	}

	public function create()
	{
		return view('supplier/create');
	}

	public function view($id)
	{
		$data['supplier'] = \App\Models\Supplier::find($id);

		return view('supplier/view', $data);
	}

 	public function edit($id)
 	{
 		$data['supplier'] = \App\Models\Supplier::find($id);

 		return view('supplier/edit', $data);
 	} 	

    public function store(Request $request)
 	{
 		$supplier = new \App\Models\Supplier($request->all());
 		$supplier->save();

 		return redirect('/suppliers/');
 	}

 	public function update(Request $request)
 	{
 		$supplier = \App\Models\Supplier::find($request->id);
 		$supplier->name = $request->name;
 		$supplier->update();

 		return redirect('/suppliers/');
 	}

 	public function destroy(Request $request)
 	{
 		$supplier = \App\Models\Supplier::destroy($request->id);

 		return view('/suppliers/');
 	}
}
