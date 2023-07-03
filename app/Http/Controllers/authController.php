<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{User,ContactUs,Appointment,Doctor};
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class authController extends Controller
{
    //

    public function login(){
        return view('auth.login');
    }

    public function register(){
        return view('auth.register');
    }

    public function postRegister(Request $request){
        $request->validate([
            'name'=>'required',
            'email'=>'required|email|unique:users',
            'address'=>'required|string',
            'phone'=>'required|max:12',
            'password'=>'required|min:6',

        ]);

      $data=$request->all();
      $this->create($data);
      return redirect('/login')->with('message','You have Registered Succesfully');
    }
    public function create(array $data){
        return User::create([
            'name'=>$data['name'],
            'email'=>$data['email'],
            'address'=>$data['address'],
            'phone'=>$data['phone'],
            'password'=>Hash::make($data['password']),
        ]);
    }

    public function postLogin(Request $request){
        $request->validate([
            'email'=>'required',
            'password'=>'required',
        ]);
        $credentials=$request->only('email','password');
         if(Auth::attempt($credentials)){
             if(Auth::user()->usertype==0){
                return redirect('/');
             }
             else{
                $countDoctors=Doctor::all()->count();
                    $countPatient=User::where([
                        'usertype'=>0,
                    ])->count();
                    $countAppointment=Appointment::all()->count();
                    $countMessage=ContactUs::all()->count();
                    return view('admin.adminMain',compact('countDoctors','countPatient','countAppointment','countMessage'));
             }
         }
         else{
            return redirect('/login')->with('message','Invalid email or password');
         }
    }

    public function logout(){
       Session::flush();
       Auth::logout();
       return redirect('/');

    }
}
