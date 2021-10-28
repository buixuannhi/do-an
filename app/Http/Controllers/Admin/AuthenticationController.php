<?php

namespace App\Http\Controllers\Admin;


use App\Http\Controllers\Controller;
use App\Models\Accounts;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthenticationController extends Controller
{
    
    public function index()
    {
      return view('Backend/login/index');
    }

    function submidlogin(Request $request){     
        $email = $request->email;
        $password = $request->password;
        if (Auth::attempt(['email' => $email, 'password' => $password]))
        {
        return redirect()->route('admin.home');
        }
        return back()->with(['ms'=>'sai rồi']);
    }
    function register(){
        return view('Backend/register/index');
    }

    function addregister(Request $request)
    {  
        $name=$request->fullname;
        $email=$request->email;
        $password=$request->password;
        $repassword=$request->repassword;
        $phone='0123456789';
        $address='hà nội';
        $gender='bd';
        $birthday=$request->date;
        $description="ko có";
        $avatar='1';
        $hashad=bcrypt($password);
        if($password != $repassword){
            return back()->with(['ms'=>'mật khẩu nhập ko trùng nhau']);
        }
        Accounts::create([
            'name'=>$name,
            'email'=>$email,
            'password'=>$hashad,
            'phone'=>$phone,
            'address'=>$address,
            'gender'=>$gender,
            'birtday'=>$birthday,
            'description'=>$description,
            'avatar'=>$avatar,
           
        ]);
    }
}