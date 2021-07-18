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
        $data = product::all();
        return view('index',['products'=>$data]);
    }

    function detail(Request $req){
       $data = product::find($req->id);

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
        $order->status ="Pending";
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
     
     function productList(){
        $data=product::all();
        return view('admin_product',['products'=>$data]);
     }
     
     function adding_product(Request $req){
        //inserting product into table
        DB::table('products')->insert([
                'name'=>$req->name,
                'price'=>$req->price,
                'category'=>$req->category,
                'description'=>$req->description,
                'gallery'=>'img/id'    
        ]);
        $message= ['status'=>'success','message'=>'Product Added Sucessfully'];
            $req->session()->put('message',$message);
        $id=product::All()->last();
         $picture_name = $id['id'];
         
         $target_dir = "img/";
$target_file = $target_dir . basename($_FILES["file"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

// Check if image file is a actual image or fake image
  $check = getimagesize($_FILES["file"]["tmp_name"]);
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg") {
 $message= ['status'=>'error','message'=>'Only Png, Jpeg and jpg file type Accepted'];
        Session::put('message',$message);
         return back();    }
  else{
    if($check !== false) {
       $img_name = $_FILES["file"]["name"];
       $ext = pathinfo($img_name,PATHINFO_EXTENSION);
  
        $new_file_name = $picture_name.'.'.$ext;
        
        move_uploaded_file( $_FILES["file"]["tmp_name"], $target_dir.$new_file_name);
        $pic_url = $target_dir.$new_file_name;
        DB::table('products')->where('id', $picture_name)->update(['gallery'=>$pic_url]);
          return redirect('admin_product'); 
             }
             }
}

    
   function product_delete($id){
       $product = product::find($id);
       $url = $product['gallery'];
       if (file_exists($url)){
        unlink($url);
       }
        product::where('id',$id)->delete();
        $message= ['status'=>'success','message'=>'Product Deleted Sucessfully'];
        Session::put('message',$message);
         return back();
}

function orderList(){
    $orders = DB::table('orders')
        ->join('users','orders.userid', '=','users.id')
         ->join('products','orders.productid', '=','products.id')
         ->select('orders.*','users.name as fullname','users.phone','products.name','products.price','products.description')
        ->where('status','Pending')
        ->get();
        
        $orders2 = DB::table('orders')
        ->join('users','orders.userid', '=','users.id')
         ->join('products','orders.productid', '=','products.id')
         ->select('orders.*','users.name as fullname','users.phone','products.name','products.price','products.description')
        ->where('status','Confirmed')
        ->get();
        return view('admin_order',['orders'=>$orders,'orders2'=>$orders2]);
     }
     
     
function orderSearch(Request $req){
   $id = $req->id;
    $orders = DB::table('orders')
        ->join('users','orders.userid', '=','users.id')
         ->join('products','orders.productid', '=','products.id')
         ->select('orders.*','users.name as fullname','users.phone','products.name','products.price','products.description')
         ->where('orders.id', $id)
        ->get();
        return view('search_resultl',['orders'=>$orders]);
     }
     
      function confirm_order($id){
       DB::table('orders')->where('id', $id)->update(['status'=>'Confirmed'],['payment_status'=>'paid']);
       $message= ['status'=>'success','message'=>'Order confirmed Sucessfully'];
        Session::put('message',$message);
         return back();
     }
     
     function delete_order($id){
        DB::table('orders')->where('id',$id)->delete();
        $message= ['status'=>'success','message'=>'Order Deleted Sucessfully'];
        Session::put('message',$message);
         return back();
}
}
