@extends('layouts.admin.adminLayouts')
@section('content')
@section('title', 'Appointment')

<div class="heading">
    <h3>Appointment</h3>
     </div>
     @if(session()->has('message'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{session()->get('message')}}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
    @endif
    {{--
     <table class="table tableStyle">
        <thead>
            <th scope="col" style="color:#fff">#</th>
            <th scope="col" style="color:#fff">Patient Name</th>
            <th scope="col" style="color:#fff">Email</th>
            <th scope="col" style="color:#fff">Appointment Date</th>
            <th scope="col" style="color:#fff">Doctor Name</th>
            <th scope="col" style="color:#fff">Status</th>
            <th scope="col" style="color:#fff">Approved</th>
            <th scope="col" style="color:#fff">Cancelled</th>
            <th scope="col" style="color:#fff">Delete</th>



        </tr>
        </thead>
        <tbody>

         @foreach ($appointment as $index=>$appointment)
         <tr>
            <th scope="row">{{$index+1}}</th>
            <td>{{$appointment->name}}</td>
            <td>{{$appointment->email}}</td>
            <td>{{$appointment->appointment_date}}</td>
            <td>{{$appointment->doctor_name}}</td>
            <td>{{$appointment->message}}</td>
            <td>{{$appointment->appointment_status}}</td>

            <td>
                <form action="" method="post">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-success">Approved</button>
                </form>

            </td>
            <td>
                <form action="" method="post">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-warning">Cancelled</button>
                </form>

            </td>
            <td>
                <form action="" method="post">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>

            </td>
            @endforeach
          </tr>

        </tbody>
      </table> --}}

      <div class="row row-cols-4 row-cols-md-2 g-2">
        @foreach($appointment as $appointment)
        <div class="col">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Patient name : {{$appointment->name}}</h5>
              <hr>
              <div class=""  style="background-color: #096a5f; border-radius:3% 3%; margin:1.2em; padding:1.2em 1.2em">
              <p class="card-text">Patient Email : {{$appointment->email}}</p>
              <p class="card-text" >Patient Phone :{{$appointment->phone_number}} </p>
              <p class="card-text">Message : {{$appointment->message}}</p>
              <p class="card-text">Doctor Name : {{$appointment->doctor_name}}</p>
              <p class="card-text">Appointment date :{{$appointment->appointment_date}} </p>
              <p class="card-text">Appointment Status: {{$appointment->appointment_status}}</p>
            </div>
              <div class="d-flex justify-content">
              <p>
                <form action="{{route('approve',$appointment->id)}}" method="post">
                    @csrf
                    @method('PUT')
                    <button type="submit" class="btn btn-success" style="margin-right:0.8em;">Approve</button>
                </form>
              </p>
              <p>
                <form action="{{route('cancel', $appointment->id)}}" method="post">
                    @csrf
                    @method('PUT')
                    <button type="submit" class="btn btn-warning" style="margin-right:0.8em;">Cancel</button>
                </form>
              </p>
              <p>
                <form action="{{route('delete_appointment',$appointment->id)}}" method="post">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger" style="margin-right:0.8em;">Delete</button>
                </form>
              </p>

        </div>
            </div>
          </div>
        </div>
        @endforeach
      </div>

@endsection
