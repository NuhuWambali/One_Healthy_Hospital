@extends('layouts.auth.authLayouts')
 @section('title','Register')
<h1 class="heading wow fadeInDown">One Health Hospital</h1>
 @section('content')
            @if ($errors->has('email'))
            <div class="alert alert-danger">
                <button type="button" class="close" aria-hidden="true" data-dismiss="alert">x</button>
                {{$errors->first('email')}}
            </div>
            @endif
        <header class="d-flex justify-content-between my-4 wow fadeInUp">
            <h2 class="">Register Here</h2>
            <div>
                <a href="{{route('index.show')}}" class="btn btn-success">Back</a>
            </div>
        </header>
        <form action="{{route('postRegister.store')}}" method="POST">
            @csrf

                <div class="mb-3 mt-3 wow fadeInUp">
                    <label for="email">Name:</label>
                    <input type="text" class="form-control" id="name" placeholder="Enter name" name="name" value="{{old('name')}}" required>
                </div>

                <div class="mb-3 mt-3 wow fadeInUp">
                    <label for="name">Email:</label>
                    <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" value="{{old('email')}}" required>
                </div>
                <div class="mb-3 mt-3 wow fadeInUp">
                    <label for="address">Address:</label>
                    <input type="text" class="form-control" id="address" placeholder="Enter address" name="address" value="{{old('address')}}" required>
                </div>
                <div class="mb-3 mt-3 wow fadeInUp">
                    <label for="phone">Phone:</label>
                    <input type="text" class="form-control" id="phone" placeholder="Enter phone" name="phone" value="{{old('phone')}}" required>
                </div>
                <div class="mb-3 wow fadeInUp">
                    <label for="pwd">Password:</label>
                    <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="password" value="{{old('password')}}" required>
                </div>

                <button type="submit" class="btn btn-light wow zoomIn" name="submit">Register</button>
            </form>
            <p class="wow fadeInUp">I Have An Account ! <a href="{{route('login')}}" >Login Here</a></p>
        </div>
        </div>
@endsection
