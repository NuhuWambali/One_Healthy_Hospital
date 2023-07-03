@extends('layouts.admin.adminLayouts')
@section('content')
@section('title','Patient')

<div class="heading">
    <h3 >Our Patient</h3>
</div>
<table class="table tableStyle">
    <thead>
        <th scope="col" style="color:#fff">#</th>
        <th scope="col" style="color:#fff">Name</th>
        <th scope="col" style="color:#fff">Email</th>
        <th scope="col" style="color:#fff">Address</th>
        <th scope="col" style="color:#fff">Phone</th>
        <th scope="col" style="color:#fff">Action</th>

    </tr>
    </thead>
    <tbody>
        @foreach ($patient as $index=>$patient )
      <tr>
        <th scope="row">{{$index+1}}</th>
        <td>{{$patient->name}}</td>
        <td>{{$patient->email}}</td>
        <td>{{$patient->address}}</td>
        <td>{{$patient->phone}}</td>

        <td>
            <form action="" method="post">
                <button type="submit" class="btn btn-danger">Delete</button>
            </form>

        </td>

      </tr>
      @endforeach
    </tbody>
</table>
@endsection
