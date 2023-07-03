<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\SUpport\Facades\Auth;
use App\Models\{User,Doctor,Appointment, ContactUs, };



class adminController extends Controller
{
    //

    public function adminIndex(){
        if(Auth::user())
        {
                if(Auth::user()->usertype==0){
                    return view('userIndex');
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
           return redirect('/');
        }
    }

    public function doctor(){
        return view('admin.addDoctorPage');
    }

    public function addDoctor(Request $request){
      $request->validate([
        'name'=>'required',
        'email'=>'required|email|unique:doctors',
        'phone'=>'required',
        'speciality'=>'required',
        'room_number'=>'required',
        'image'=>'required'
      ]);

      $doctor=new Doctor;
      $doctor->name=$request->name;
      $doctor->email=$request->email;
      $doctor->phone=$request->phone;
      $doctor->speciality=$request->speciality;
      $doctor->room_number=$request->room_number;
      $image=$request->image;
      $imageName=time().'.'.$image->getClientoriginalExtension();
      $request->image->move('doctorImage',$imageName);
      $doctor->image=$imageName;
      $doctor->save();
      return redirect()->back()->with('message','Doctor Added Successfully');
    }

    public function viewDoctor(){
         $doctors=Doctor::all();
         return view('admin.viewDoctor', compact('doctors'));
    }

    public function deleteDoctor($id){
          $doctor=Doctor::findOrFail($id);
          $doctor->delete();
          return redirect()->back()->with('message', 'Doctor Deleted Successfully');
    }

    public function viewAppointment(){
        $appointment=Appointment::all();
        return view('admin.appointment',compact('appointment'));
    }

    public function approve($id){
        $appointment=Appointment::findOrFail($id);
        $appointment->appointment_status='approved';
        $appointment->save();
        return back()->with('message', 'Appointment Approved ');
    }

    public function cancel($id){
        $appointment=Appointment::findOrFail($id);
        $appointment->appointment_status='cancelled';
        $appointment->save();
        return back()->with('message','Appointment Cancelled Successfully');
    }

    public function delete_appointment($id){
        $appointment=Appointment::findOrFail($id);
        $appointment->delete();
        return back()->with('message', 'Appointment Deleted Succesfully');
    }

    public function viewPatient(){
        $patient=User::where([
            'usertype'=>0,
        ])->get();
       return view('admin.patient',compact('patient'));
    }

    public function message (Request $request, ContactUs $ContactUs){
        $message=ContactUs::all();
        return view('admin.message',compact('message'));
    }

    public function delete_message(Request $request, ContactUs $contactUs, $id){
        $delete_message=ContactUs::findOrFail($id);
        $delete_message->delete();
        return back()->with('message', 'Message Deleted Successfully');
    }

    public function allUser(Request $request, User $user){
        $allUser=User::all();
        return view('admin.allUser', compact('allUser'));
    }

    public function delete_user(Request $request, User $user,$id){
           $delete_user=User::findOrFail($id);
           $delete_user->delete();
           return back()->with('message', 'User Deleted Successfully');
    }
}
