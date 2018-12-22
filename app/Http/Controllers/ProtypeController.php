<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Protype;

class ProtypeController extends Controller 
{
	public function index()
	{
		$data = Protype::orderBy('type_ID','desc')->get();
		return view('admin/protype',['getTypeProducts'=>$data]);
	}
	
	public function create()
	{
		return view('admin/add_protype');
	}
	public function store(Request $request)
	{
		$type = new Protype;
		$protype = $request->all();
		$type->type_name = $request->type_name;
		$type->type_img = $protype['fileUpload']->getClientOriginalName();
		$destinationPath = 'images/protypes';
		$protype['fileUpload']->move($destinationPath, $type->type_img);
		$type->save();	
		return $this->index();
	}

	public function edit($id)
	{
		$data['getProtypeByID'] = Protype::where('type_ID', '=', $id)->first();
		return view('admin/edit_protype',['data'=>$data]);
	}
	public function update(Request $request, $id)
	{
		$type = Protype::find($id);
		$protype = $request->all();
		$type->type_name = $protype['type_name'];

		if ($protype['fileUpload'] != null)
		{
			$type->type_img = $protype['fileUpload']->getClientOriginalName();
			$destinationPath = 'images/protypes';
			$protype['fileUpload']->move($destinationPath, $type->type_img);
		}
		

		$type->save();	
		return $this->index();
	}
	public function destroy($id)
	{
		Protype::where('type_ID', '=', $id)->delete();
		return $this->index();
	}
} 