<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Manufacture;

class ManufactureController extends Controller 
{
	public function index()
	{
		$data = Manufacture::orderBy('manu_ID','desc')->get();
		return view('admin/manufacture',['getManuProducts'=>$data]);
	}
	
	public function create()
	{
		return view('admin/add_manufacture');
	}
	public function store(Request $request)
	{
		$manu = new Manufacture;
		$manufacture = $request->all();
		$manu->manu_name =$request->manu_name;
		$manu->manu_img = $manufacture['fileUpload']->getClientOriginalName();
		$destinationPath = 'images/manufactures';
		$manufacture['fileUpload']->move($destinationPath, $manu->manu_img);
		$manu->save();	
		return $this->index();
	}
	public function edit($id)
	{
		$data['getManufactureByID'] = Manufacture::where('manu_ID', '=', $id)->first();
		return view('admin/edit_manufacture',['data'=>$data]);
	}
	public function update(Request $request, $id)
	{
		$manu = Manufacture::find($id);
		$manufacture = $request->all();
		$manu->manu_name = $manufacture['manu_name'];

		if ($manufacture['fileUpload'] != null)
		{
			$manu->manu_img = $manufacture['fileUpload']->getClientOriginalName();
			$destinationPath = 'images/manufactures';
			$manufacture['fileUpload']->move($destinationPath, $manu->manu_img);
		}
		

		$manu->save();	
		return $this->index();
	}
	public function destroy($id)
	{
		Manufacture::where('manu_ID', '=', $id)->delete();
		return $this->index();
	}
} 