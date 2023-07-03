@extends('layouts.admin.adminLayouts')
@section('content')
@section('title','messages')

<div class="heading">
    <h3 >Messages</h3>
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
        <th scope="col" style="color:#fff">subject</th>
        <th scope="col" style="color:#fff">Action</th>

    </tr>
    </thead>
    <tbody>
   @foreach( $message as $index=>$message)
      <tr>
        <th scope="row">{{$index+1}}</th>
        <td>{{$message->name}}</td>
        <td>{{$message->email}}</td>
        <td>{{$message->subject}}</td>



        <td>
            <form action="{{route('delete_message', $message->id)}}" method="post">
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
