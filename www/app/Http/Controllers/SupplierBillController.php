<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SupplierBillController extends Controller
{
	public function index()
	{
		$data['supplier_bills'] = \App\Models\SupplierBill::all();

		return view('supplier_bill/index',$data);
	}

	public function create()
	{
		$data['projects'] = \App\Models\Project::all();
		$data['suppliers'] = \App\Models\Supplier::all();

		return view('supplier_bill/create', $data);
	}

	public function view($id)
	{
		$data['supplier_bill'] = \App\Models\SupplierBill::find($id);

		return view('supplier_bill/view', $data);
	}

 	public function edit($id)
 	{
		$data['projects'] = \App\Models\Project::all();
		$data['suppliers'] = \App\Models\Supplier::all();
 		$data['supplier_bill'] = \App\Models\SupplierBill::find($id);

 		return view('supplier_bill/edit', $data);
 	} 	

    public function store(Request $request)
 	{
 		$supplier_bill = new \App\Models\SupplierBill($request->all());
 		$supplier_bill->save();

 		return redirect('/supplier_bills/');
 	}

 	public function update(Request $request)
 	{
 		$supplier_bill = \App\Models\SupplierBill::find($request->id);
 		$supplier_bill->name = $request->name;
 		$supplier_bill->update();

 		return redirect('/supplier_bills/');
 	}

 	public function destroy(Request $request)
 	{
 		$project = \App\Models\SupplierBill::destroy($request->id);

 		return view('/supplier_bill/');
 	}
}
