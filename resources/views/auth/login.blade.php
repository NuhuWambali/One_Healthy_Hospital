 @extends('layouts.auth.authLayouts')
 @section('title','Login')
<h1 class="heading wow fadeInDown">One Health Hospital</h1>
 @section('content')
  @if(session()->has('message'))
   <div class="alert alert-success">
       <button type="button" class="close" aria-hidden="true" data-dismiss="alert">x</button>
       {{session()->get('message')}}
   </div>
   @endif
        <header class="d-flex justify-content-between my-4 wow fadeInUp">
            <h2 class="">Login Here</h2>
            <div>
                <a href="{{route('index.show')}}" class="btn btn-success">Back</a>
            </div>
        </header>
        <form action="{{route('postLogin.store')}}" method="POST">
            @csrf
            <div class="mb-3 mt-3 wow fadeInUp">
                <label for="email">Email:</label>
                <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" value="{{old('email')}}" required>
            </div>

            <div class="mb-3 wow fadeInUp">
                <label for="pwd">Password:</label>
                <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="password" required>
            </div>

            <button type="submit" class="btn btn-light wow zoomIn" name="submit">Login</button>
            </form>
            <p class="wow fadeInUp">I Don't Have An Account ! <a href="{{route('register.show')}}" >Register Here</a></p>
        </div>
        </div>
@endsection

