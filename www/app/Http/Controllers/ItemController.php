<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ItemController extends Controller
{
	public function index()
	{
		$data['items'] = \App\Models\Item::all();

		return view('item/index',$data);
	}

	public function create()
	{
		$data['suppliers'] = \App\Models\Supplier::all();
		$data['item_types'] = \App\Models\ItemType::all();

		return view('item/create',$data);
	}

	public function view($id)
	{
		$data['item'] = \App\Models\Item::find($id);

		return view('item/view', $data);
	}

 	public function edit($id)
 	{
 		$data['item'] = \App\Models\Item::find($id);
		$data['suppliers'] = \App\Models\Supplier::all();
		$data['item_types'] = \App\Models\ItemType::all();

 		return view('item/edit', $data);
 	} 	

    public function store(Request $request)
 	{
 		$item = new \App\Models\Item($request->all());
 		$item->save();

 		return redirect('/items/');
 	}

 	public function update(Request $request)
 	{
 		$item = \App\Models\Item::find($request->id);
 		$item->name = $request->name;
 		$item->update();

 		return redirect('/items/');
 	}

 	public function destroy(Request $request)
 	{
 		$item = \App\Models\Item::destroy($request->id);

 		return view('/items/');
 	}
}
