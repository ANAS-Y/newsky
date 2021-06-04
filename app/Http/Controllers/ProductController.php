<?php

namespace App\Http\Controllers;
use App\Models\product;
use App\Models\cart;
use App\Models\Order;
use Illuminate\Http\Request;
use Session;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    //index funtion
    function index(){
        $data=product::all();
        return view('product',['products'=>$data]);
    }

    function detail($id){
       $data = product::find($id);

        return view('detail',['product'=>$data]);
        
    }
    function addToCart(Request $req){
    $data = product::find($req->id);
    if ($req->session()->has('user'))
    {
        $cart =new cart;
        $cart->userid =$req->session()->get('user')['id'];
        $cart->productid =$req->id;
        $cart->save();
        return redirect('/');
    }
    else {
        # redirect to login
       return redirect('/login');
    }
         
     }

     static function cartItem() 
     {
         $user_id = Session::get('user')['id'];
         return cart::where('userid', $user_id)->count();
     }

     function cartList() 
     {
        if (Session::has('user')){
        $user_id = Session::get('user')['id'];
        $products = DB::table('cart')
        ->join('products','cart.productid', '=','products.id')
        ->where('cart.userid', $user_id)
        ->select('products.*','cart.id as cartid')
        ->get();
        return view('cartlist',['products'=>$products]);
        }
        else{
            return redirect('/');
        }
     }

     function removeCart($id)
     {
         Cart::destroy($id);
        return redirect('cartlist');
     }

     function orderNow()
     {
        $user_id = Session::get('user')['id'];
       $total = DB::table('cart')
        ->join('products','cart.productid', '=','products.id')
        ->where('cart.userid', $user_id)
        ->sum('products.price');
        return view('ordernow',['total'=>$total]);
     }

     function orderPlace(Request $req)
     {
        $user_id = Session::get('user')['id'];
        $allCart = Cart::where('userid', $user_id)->get();
        foreach($allCart as $cart){
        $order = new Order;
        $order->productid =$cart['productid'];
        $order->userid =$cart['userid'];
        $order->status ="pending";
        $order->payment_method =$req->payment;
        $order->payment_status ="on delivery";
        $order->address =$req->address;
        $order->save();
        }
        $allCart = Cart::where('userid', $user_id)->delete();
         return redirect('/');
     }

     function myOrders(){
        if (Session::has('user')){
        $user_id = Session::get('user')['id'];
        $orders = DB::table('orders')
         ->join('products','orders.productid', '=','products.id')
         ->where('orders.userid', $user_id)
         ->get();
         return view('myorders',['orders'=>$orders]);
        }
        else{
            return redirect('/'); 
        }
     }

}
