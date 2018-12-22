<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\manufactures;
use App\products;
use App\User;
use Cart;
use Illuminate\Http\Request;

class Nhom1Controller extends Controller
{
    /**
     * Show the profile for the given user.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        return view('user.profile', ['user' => User::findOrFail($id)]);
    }
    public function index()
    {
        $data['products']     = products::paginate(8);
        $data['manufactures'] = manufactures::all();
        return view('footwear/index', ['prod' => $data]);

    }
    public function cart(Request $request)
    {
        if ($request->isMethod('post')) {
            $product_id = $request->get('id');
            $quantity   = $request->get('quantity');
            $product    = products::find($product_id);

            $cartInfo = [
                'id'      => $product_id,
                'name'    => $product->name,
                'price'   => $product->price,
                'qty'     => $quantity,
                'options' => ['img' => $product->image],
            ];
            Cart::add($cartInfo);
        }
        $cart               = Cart::content();
        $this->data['cart'] = $cart;

        return view('footwear.cart', $this->data);

    }

    public function page($id)
    {
        $TK['products']     = products::where('type_ID', '=', $id)->paginate(4);
        $TK['manufactures'] = manufactures::all();
        return view('footwear/' . $id, ['prod' => $TK]);
    }
    public function detail($id)
    {
        $data['products'] = products::find($id);
        return view('footwear/detail', ['prod' => $data]);
    }
    public function searchName(Request $request)
    {
        if ($request->isMethod('get')) {
            $key            = $request->get('key');
            $data['search'] = products::where('name', 'like', '%' . $key . '%')->paginate(4);

        }

        $data['manufactures'] = manufactures::all();
        return view('footwear.result2', ['prod' => $data, 'tag' => $key]);
    }

}
