@extends('layouts.admin')

@section('title','New Experience')

@section('content')
    <div class="page-titles">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javascript:void(0)">Experience</a></li>
            <li class="breadcrumb-item active"><a href="javascript:void(0)">New Experience</a></li>
        </ol>
    </div>

    <div class="row">
        {{-- Experience Form Start --}}
        <div class="col-xl-12 col-lg-12 col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Experience Form</h4>
                </div>
                <div class="card-body">
                    <div class="basic-form">
                        {{ Form::open(['route'=>'experience.store','method'=>"post",'files'=>true]) }}
                            @include('experience.form-experience',["button"=>"Save Experience"])
                        {{ Form::close() }}
                    </div>
                </div>
            </div>
        </div>
        {{-- Experience Form End --}}

        {{-- Experience Lists Start --}}
        <div class="col-xl-12 col-lg-12 col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Experiences</h4>
                </div>
                <div class="card-body">
                    @include('experience.experiences')
                </div>
            </div>
        </div>
        {{-- Experience Lists End --}}

    </div>

@endsection


@section('js')
    <script>
        $(document).on("click",".changeStatus",function () {
           return confirm("Are you sure to change status?");
        });
    </script>

@endsection
