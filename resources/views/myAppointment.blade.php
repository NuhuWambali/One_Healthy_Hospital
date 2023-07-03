@extends('layouts.userMain')
@section('content')
@section('title','Appointment')
<div class="heading2">
    <h3>My Appointment</h3>
</div>
@if($myAppointment->count())
<div class="tableContent">
<div class="tableStyling">
<table class="table tableStyle">
    <thead>
      <tr>
        <th scope="col">Doctor Name</th>
        <th scope="col">Date</th>
        <th scope="col">Message</th>
        <th scope="col">Status</th>
        <th scope="col">Cancel</th>
        <th scope="col">Delete</th>
      </tr>
    </thead>
    <tbody>

        @foreach ($myAppointment as $appointments)
        <tr>
            <td>{{$appointments->doctor_name}}</td>
            <td>{{$appointments->appointment_date}}</td>
            <td>{{$appointments->message}}</td>
            @if($appointments->appointment_status=='Appointment Cancelled')
            <td style="color:red">{{$appointments->appointment_status}}</td>
            @else
            <td>{{$appointments->appointment_status}}</td>
            @endif
            <td><form action="{{route('cancel_appointment', $appointments->id)}}" method="POST">
                @csrf
                @method('POST')
                <button type="submit" class="btn btn-warning">Cancel</button>
                </form>
            </td>
            <td><form action="{{route('delete_appointment', $appointments->id)}}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Delete</button>
                </form></td>
          </tr>
        @endforeach

    </tbody>
  </table>
</div>
  @else
  <div class="heading3">
  <h4 class="no_appointment mt-4 mb-4">There is no appointment you made</h4>
  </div>
</div>
  @endif
@endsection
