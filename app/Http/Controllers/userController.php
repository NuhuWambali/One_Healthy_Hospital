<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use App\Models\ContactUs;
use Illuminate\Http\Request;
use ILluminate\support\Facades\Auth;
use App\Models\Doctor;

class userController extends Controller
{


    public function index(){
        if(Auth::user()){
          if(Auth::user()->usertype==0){
            $doctor=Doctor::all();
            return view('userIndex',compact('doctor'));
          }
          else{
            return view('admin.adminMain');
          }
        }
        else{
            $doctor=Doctor::all();
            return view('userIndex',compact('doctor'));
        }

    }

    public function aboutUs(){
        return view('aboutUs');
    }
    public function doctors(){
        $doctor=Doctor::all();
        return view('doctors',compact('doctor'));
    }
    public function news(){
        return view('news');
    }
    public function contact(){
        return view('contact');
    }

    public function make_appointment(Request $request){
       $addAppointment=new Appointment;
       $addAppointment->name=$request->name;
       $addAppointment->email=$request->email;
       $addAppointment->doctor_name=$request->doctor_name;
       $addAppointment->phone_number=$request->phone_number;
       $addAppointment->appointment_date=$request->appointment_date;
       if(Auth::id()){
           $addAppointment->user_id=Auth::user()->id;
       }
       else{
        $addAppointment->user_id="Not Logged In";
       }
       $addAppointment->message=$request->message;
       $addAppointment->save();
       return redirect()->back()->with('message','Appointment Requested Successfully,...we will contact you soon');
      }

      public function myAppointment(){
        $authUser=Auth::user()->id;
        $myAppointment=Appointment::where('user_id','=',$authUser)->get();

        return view('myAppointment',compact('myAppointment'));
      }

      public function cancel_appointment(Request $request, $id){
        $appointment=Appointment::findOrFail($id);
        $appointment->appointment_status='Appointment Cancelled';
        $appointment->save();
        return back()->with('message','Appointment Cancelled Succesfully');
      }

      public function delete_appointment(Request $request, $id){
      $appointment=Appointment::findOrFail($id);
      $appointment->delete();
      return back()->with('message', 'Appointment Deleted Successfully');
      }

      public function contact_us(Request $request, ContactUs $contactUs){
        $validated=$request->validate([
            'name'=>'string',
            'email'=>'email',
            'subject'=>'required',
            'message'=>'required',
        ]);

        $contactUs=contactUs::create($validated);

        return back()->with('message', 'We Receive Your Message...We will Reach You Soon');
      }
}
