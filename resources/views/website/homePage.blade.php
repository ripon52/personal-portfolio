@extends('website.Master')

@section('content')
<!-- ======= Hero Section ======= -->
<section id="hero" class="d-flex align-items-center"
    style="background-image: url({{ asset('project_files/picture/'.user()->avatar)}})">
    <div class="container d-flex flex-column align-items-center" data-aos="zoom-in" data-aos-delay="100">
        <h1 style="background: #fff; color: #000; padding: 5px 30px; border-radius: 20px;">{{ user()->name }}</h1>
        <h2 style="background: #fff; color: #000; padding: 5px 30px; border-radius: 20px;">I'm a professional Database
            Expert </h2>
        <a href="{{ url('about') }}" class="btn-about">About Me</a>
        <a href="{{ asset('project_files/resume/'.user()->resume) }}" target="_blank" class="btn-about">Download Resume
        </a>

    </div>
</section><!-- End Hero -->

@endsection