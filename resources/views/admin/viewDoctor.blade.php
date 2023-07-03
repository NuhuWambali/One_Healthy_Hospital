@extends('layouts.admin.adminLayouts')
@section('content')
@section('title','Doctors')

<div class="heading">
    <h3 >Our Doctors</h3>
</div>
     @if(session()->has('message'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{session()->get('message')}}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
    @endif
     <table class="table tableStyle">
        <thead>
            <th scope="col" style="color:#fff">#</th>
            <th scope="col" style="color:#fff">Name</th>
            <th scope="col" style="color:#fff">Email</th>
            <th scope="col" style="color:#fff">Phone</th>
            <th scope="col" style="color:#fff">Speciality</th>
            <th scope="col" style="color:#fff">Room No</th>
            <th scope="col" style="color:#fff">Image</th>
            <th scope="col" style="color:#fff">Action</th>

        </tr>
        </thead>
        <tbody>
          <tr>
       @foreach ($doctors as $index=>$doctor)
            <th scope="row">{{$index+1}}</th>
            <td>{{$doctor->name}}</td>
            <td>{{$doctor->email}}</td>
            <td>{{$doctor->phone}}</td>
            <td>{{$doctor->speciality}}</td>
            <td>{{$doctor->room_number}}</td>
            <td><img class="imageStyle" src="doctorImage/{{$doctor->image}}"></td>
            <td>
                <form action="{{route('deleteDoctor.destroy', $doctor->id)}}" method="post">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>

            </td>
          </tr>
          @endforeach
        </tbody>
    </table>


@endsection
