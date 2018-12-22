<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Product;
use App\products;
use App\Protype;
use App\Manufacture;

class ProductController extends Controller 
{
	public function __construct()
	{
		$this->middleware('auth');
	}
	public function index()
	{
		$data = Product::orderBy('ID','desc')->paginate(5);
		return view('admin/admin',['getAllProducts'=>$data]);
	}
	
	public function searchPaginate(Request $request){
		$key = $request->key;
		$data = Product::where('description','like','%'.$key.'%')->paginate(5);
		return view('admin/result',['SearchByID'=>$data,'tag'=> $key]);
	}	

	public function show($id)
	{
		$data = Protype::all();
		return view('admin/add_product',['getTypeProducts'=>$data]);
	}

	public function create()
	{
		$data['Type'] = Protype::all();
		$data['Manu'] = Manufacture::all();
		return view('admin/add_product',['data'=>$data]);
	}
	public function store(Request $request)
	{
		$pro = new Product;
		$product = $request->all();
		$pro->name =$request->name;
		$pro->type_ID = $request->type_id;
		$pro->manu_ID = $request->manu_id;
		$pro->image = $product['fileUpload']->getClientOriginalName();
		$pro->description = $request->description;
		$pro->price = $request->price;
		$destinationPath = 'images/products';
		$product['fileUpload']->move($destinationPath, $pro->image);
		$pro->save();	
		return $this->index();
	}
	public function edit($id)
	{
		$data['getProductByID'] = Product::where('ID', '=', $id)->first();
		$data['Type'] = Protype::all();
		$data['Manu'] = Manufacture::all();
		return view('admin/edit_product',['data'=>$data]);
	}
	public function update(Request $request, $id)
	{
		$pro = Product::find($id);
		$product = $request->all();
		$pro->name = $product['name'];
		$pro->type_ID = $product['type_id'];
		$pro->manu_ID = $product['manu_id'];
		$pro->description = $product['description'];
		$pro->price = $product['price'];

		if ($product['fileUpload'] != null)
		{
			$pro->image = $product['fileUpload']->getClientOriginalName();
			$destinationPath = 'images/products';
			$product['fileUpload']->move($destinationPath, $pro->image);
		}
		

		$pro->save();	
		return $this->index();
		
	}
	public function destroy($id)
	{
		Product::where('ID', '=', $id)->delete();
		return $this->index();
	}
} 