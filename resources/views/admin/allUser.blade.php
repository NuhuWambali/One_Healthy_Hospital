@extends('layouts.admin.adminLayouts')
@section('content')
@section('title','all User')
<div class="heading">
    <h3 >All Users</h3>
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
        <th scope="col" style="color:#fff">Address</th>
        <th scope="col" style="color:#fff">Phone</th>
        <th scope="col" style="color:#fff">User type</th>
        <th scope="col" style="color:#fff">Action</th>

    </tr>
    </thead>
    <tbody>
        @foreach($allUser as $index=>$alluser)
      <tr>
        <th scope="row">{{$index+1}}</th>
        <td>{{$alluser->name}}</td>
        <td>{{$alluser->email}}</td>
        <td>{{$alluser->address}}</td>
        <td>{{$alluser->phone}}</td>
        @if($alluser->usertype=='1')
        <td>Admin</td>
        @else
        <td>Patient</td>
        @endif
        <td>
            <form action="{{route('delete_user',$alluser->id)}}" method="post">
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
