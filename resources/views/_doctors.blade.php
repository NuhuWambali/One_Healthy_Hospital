
    <div class="owl-carousel wow fadeInUp" id="doctorSlideshow">
        @foreach($doctor as $doctor)
      <div class="item">
        <div class="card-doctor">
          <div class="header">
            <img height="320px" width="200px" src="doctorImage/{{$doctor->image}}" alt="">
            <div class="meta ">
              <a href="{{route('contact.show')}}"><span class="mai-call"></span></a>

            </div>
          </div>
          <div class="body">
            <p class="text-xl mb-0">{{$doctor->name}}</p>
            <span class="text-sm text-grey">{{$doctor->speciality}}</span>
          </div>
        </div>
      </div>
      @endforeach
   </div>
