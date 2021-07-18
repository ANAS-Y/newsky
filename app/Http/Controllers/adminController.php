<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\support\facades\Hash;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\organization;
use Session;


class adminController extends Controller
{
    function adminDashboard(){
        return view('home');
    }
    
    function adminList(){
          $admins  = User::where(['category'=>'admin'])->get();
         return view('administrator',['admins'=>$admins]); 
     }
     
     function admin_delete($email){
        $current_email = Session::get('admin')['email'];
        if($current_email==$email){
        $message= ['status'=>'error','message'=>'You cannot Delete Current Admin! Please login with
         another account to delete this Admin'];
        Session::put('message',$message);
          return redirect('/administrator');
        }
        $admin= User::where('email', $email)->delete();   
        $message= ['status'=>'success','message'=>'Admin Deleted Sucessfully'];
        Session::put('message',$message);
         return redirect('/administrator');
     }
     
      function registerAdmin(Request $req){
        //insert user
        DB::table('users')->insert([
            'name'=>$req->fullname,
            'email'=>$req->email,
            'phone'=>$req->phone,
            'category'=>'admin',
            'password'=>Hash::make($req->Password)
        ]);
        $message= ['status'=>'success','message'=>'New Admin Added Sucessfully'];
            $req->session()->put('message',$message);
                return redirect('/administrator');
    }
    
    function organisation(){
        
       $details = DB::table('organization')->get()->All();
       $staffs= DB::table('staff')->get()->All();
        return view('organisation',['details'=>$details,'staffs'=>$staffs]);
    }
    
     function organisation2(){
        
       $details = DB::table('organization')->get()->All();
        return view('about',['details'=>$details]);
    }
    
     function organisation3(){
        
       $details = DB::table('organization')->get()->All();
        return view('contact',['details'=>$details]);
    }
    
    function edit_organisation(){
        
       $details = DB::table('organization')->get()->All();
        return view('edit_organisation',['details'=>$details]);
    }
    
function adding_organisation(Request $req){
        //inserting product into table
        DB::table('organization')->insert([
                'orgName'=>$req->name,
                'about'=>$req->about,
                'vision'=>$req->vision,
                'mission'=>$req->mission,
                'address1'=>$req->address1,
                'address2'=>$req->address2,
                'address3'=>$req->address3,
                'phone1'=>$req->phone,
                'phone2'=>$req->phone2,
                'phone3'=>$req->phone3,
                'logo'=>'img/logo.png'    
        ]);
        $message= ['status'=>'success','message'=>'Organisation Detail Added Sucessfully'];
            $req->session()->put('message',$message);

         $picture_name = 'logo';
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
       $ext = 'png';
  
        $new_file_name = $picture_name.'.'.$ext;
        
        move_uploaded_file( $_FILES["file"]["tmp_name"], $target_dir.$new_file_name);
        //$pic_url = $target_dir.$new_file_name;
        //DB::table('products')->where('id', $picture_name)->update(['gallery'=>$pic_url]);
          return redirect('organisation'); 
             }
             }
}

function update_organisation(Request $req){
DB::table('organization')->where('id', $req->id)->update(['orgName'=>$req->name, 'about'=>$req->about,'vision'=>$req->vision,'mission'=>$req->mission,
'address1'=>$req->address1,'address2'=>$req->address2, 'address3'=>$req->address3,'phone1'=>$req->phone,'phone2'=>$req->phone2,'phone3'=>$req->phone3,'logo'=>'img/logo.png' ]);
        
        $message= ['status'=>'success','message'=>'Organisation Detail Updated Sucessfully'];
            $req->session()->put('message',$message);

         $picture_name = 'logo';
         $target_dir = "img/";
$target_file = $target_dir . basename($_FILES["file"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

// Check if image file is a actual image or fake image
  $check = getimagesize($_FILES["file"]["tmp_name"]);
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg") {
 $message= ['status'=>'error','message'=>'Only Png, Jpeg and jpg file type Accepted'];
        Session::put('message',$message);
      return redirect('organisation');   }
  else{
    if($check !== false) {
       $img_name = $_FILES["file"]["name"];
       $ext = 'png';
  
        $new_file_name = $picture_name.'.'.$ext;
        
        move_uploaded_file( $_FILES["file"]["tmp_name"], $target_dir.$new_file_name);
          return redirect('organisation'); 
             }
             }
}

function delete_organisation($id){
        DB::table('organization')->where('id',$id)->delete();
        $message= ['status'=>'success','message'=>'Organisation Details Deleted Sucessfully'];
        Session::put('message',$message);
         return back();
}

function adding_staff(Request $req){
        //inserting staff into table
        $staff=DB::table('staff')->where('file_number',$req->fileNo)->get()->first();
        if((!empty($staff))){
          $message= ['status'=>'error','message'=>'Staff with this file Number Already Exist'];
            $req->session()->put('message',$message);
            return back();  
        }
        DB::table('staff')->insert([
                'file_number'=>$req->fileNo,
                'first_name'=>$req->fname,
                'last_name'=>$req->lname,
                'other_name'=>$req->oname,
                'position'=>$req->post,
                'cv'=>$req->cv,
                'phone1'=>$req->phone1,
                'phone2'=>$req->phone2,
                'passport'=>'img/filenumber.png'    
        ]);
        $message= ['status'=>'success','message'=>'New Staff Added Sucessfully'];
            $req->session()->put('message',$message);
         $picture_name = $req->fileNo;
         
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
        DB::table('staff')->where('file_number', $picture_name)->update(['passport'=>$pic_url]);
          return redirect('add_staff'); 
             }
             }
}

function edit_staff(Request $req){
      
       $staffs= DB::table('staff')->where('file_number',$req->id)->get();
        return view('edit_staff',['staffs'=>$staffs]);
    }
    
    function update_staff(Request $req){
DB::table('staff')->where('file_number', $req->fileNo)->update(['first_name'=>$req->fname, 'last_name'=>$req->lname,'other_name'=>$req->oname,'position'=>$req->post,
'cv'=>$req->cv,'phone1'=>$req->phone1, 'phone2'=>$req->phone2]);
        
        $message= ['status'=>'success','message'=>'Staff Details Updated Sucessfully'];
            $req->session()->put('message',$message);
         $picture_name = $req->fileNo;
         
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
        DB::table('staff')->where('file_number', $picture_name)->update(['passport'=>$pic_url]);
          return redirect('organisation'); 
             }
             }
}

function delete_staff($id){
       $staff = DB::table('staff')->where('file_number',$id)->get()->first();
       $url = $staff->passport;
       if (file_exists($url)){
        unlink($url);
       }
        DB::table('staff')->where('file_number',$id)->delete();
        $message= ['status'=>'success','message'=>'Staff Details Deleted Sucessfully'];
        Session::put('message',$message);
         return back();
}

}
