<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Cart;
use Illuminate\Http\Request;
use Session;

class ProductController extends Controller
{
    public function index(){
        $data=Product::all();
        return view('product',['products'=>$data]);
    }

    public function  detail($id){
        $data = Product::find($id);
        return view('detail',['product'=>$data]);
    }

    public function add_to_cart(Request $request){

        if($request->session()->has('user'))
        {
            $cart=new Cart;
            $cart->user_id=$request->session()->has('user');
            $cart->product_id=$request->product_id;
            $cart->save();
            return redirect('/p');

        }
        else{
            return redirect('/');
        }

    }

    public function cartItem(){
        $userId=Session::get('user')['id'];

        return Cart::where('user_id',$userId)->count();
    }
}
