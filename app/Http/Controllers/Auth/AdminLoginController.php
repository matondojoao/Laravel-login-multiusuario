<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminLoginController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest:admin');
    }
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|string',
            'password' => 'required|string',
        ]);

        $credentials=[
           'email'=>$request->input('email'),
           'password'=>$request->input('password')
        ];
        
        $authOK=Auth::guard('admin')->attempt($credentials,$request->remember);
        
        if($authOK){
            return redirect()->intended(route('admin.Dashboard'));
        }
        return redirect()->back()->withInputs($request->only('email','remember'));
    }
    public function index(){
        return view("auth.admin-login");
    }
    
}
