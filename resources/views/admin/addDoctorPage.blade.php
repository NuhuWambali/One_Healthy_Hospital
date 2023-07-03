@extends('layouts.admin.adminLayouts')
<style>

</style>
@section('content')
<style>

</style>
@section('title','Add Doctor')
<div class="container">
    <div class="heading">
    <h3 >Add Doctor</h3>
     </div>
     @if(session()->has('message'))
     <div class="alert alert-success alert-dismissible fade show" role="alert">
         {{session()->get('message')}}
         <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
       </div>
     @endif
     <div class="form" >
        <form action="{{route('addDoctors.store')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="mb-3 mt-3" form1>
                <label for="name" class="form-label">Name:</label>
                <input type="text" class="form-control formStyle " id="name" placeholder="Doctor's name" name="name" style="color:#fff">
              </div>
             <div class="mb-3 mt-3">
                <label for="email" class="form-label">Email:</label>
                <input type="email" class="form-control" id="email" placeholder="Doctor's Email" name="email" style="color:white">
              </div>
              <div class="mb-3 mt-3">
                <label for="phone" class="form-label">Phone:</label>
                <input type="number" class="form-control" id="phone" placeholder="Doctor's Phone" name="phone" style="color:white">
              </div>
              <div class="mb-3 mt-3">
              <label for="specialist" class="form-label">Speciality</label>
              <select class="form-control" id="speciality" name="speciality" style="color:white">
                <option>Mental</option>
                <option>General Health</option>
                <option>Children</option>
                <option>Physiology</option>
                <option>Mental</option>
                <option>Dental</option>
                <option>Cardiac</option>
              </select>
              </div>
              <div class="mb-3 mt-3">
                <label for="room" class="form-label">Room No:</label>
                <input type="number" class="form-control" id="room" placeholder="Doctor's Room Number" name="room_number" style="color:white">
              </div>
              <div class="mb-3 mt-3">
                <label for="image" class="form-label">Doctor's image</label>
                <input type="file" class="form-control" id="file" aria-describedby="inputfile" aria-label="Upload" name="image" style="color:#fff">
              </div>
              <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </form>
     </div>
</div>

@endsection
