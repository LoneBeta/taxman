<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomerController extends Controller
{
	public function index()
	{
		$data['customers'] = \App\Models\Customer::all();

		return view('customer/index',$data);
	}

	public function create()
	{
		$data['customer_types'] = \App\Models\CustomerType::all();

		return view('customer/create', $data);
	}

	public function view($id)
	{
		$data['customer'] = \App\Models\Customer::find($id);

		return view('customer/view', $data);
	}

 	public function edit($id)
 	{
		$data['customer_types'] = \App\Models\CustomerType::all();
 		$data['customer'] = \App\Models\Customer::find($id);

 		return view('customer/edit', $data);
 	} 	

    public function store(Request $request)
 	{
 		$customer = new \App\Models\Customer($request->all());
 		$customer->save();

 		return redirect('/customers/');
 	}

 	public function update(Request $request)
 	{
 		$customer = \App\Models\Customer::find($request->id);
 		$customer->name = $request->name;
 		$customer->update();

 		return redirect('/customers/');
 	}

 	public function destroy(Request $request)
 	{
 		$customer = \App\Models\Customer::destroy($request->id);

 		return view('/customers/');
 	}
}
