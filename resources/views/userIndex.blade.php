@extends('layouts.userMain')
@section('content')

    @include('_helloScreen')

    @include('_features')

    <!-- .page-section -->

    @include('_welcome')

    <div class="page-section">
        <div class="container">
            <h1 class="text-center mb-5 wow fadeInUp">Our Doctors</h1>
    @include('_doctors')
        </div>
    </div>

    @include('_news')

    <!-- .page-section -->

    @include('_appointment')

     <!-- .page-section -->
    @include('_ads')

@endsection
