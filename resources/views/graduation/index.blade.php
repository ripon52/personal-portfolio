@extends('layouts.admin')

@section('title','New Graduation')

@section('content')
    <div class="page-titles">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javascript:void(0)">Graduation</a></li>
            <li class="breadcrumb-item active"><a href="javascript:void(0)">New Graduation</a></li>
        </ol>
    </div>

    <div class="row">
        {{-- Graduation Form Start --}}
        <div class="col-xl-12 col-lg-12 col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Graduation Form</h4>
                </div>
                <div class="card-body">
                    <div class="basic-form">
                        {{ Form::open(['route'=>'graduation.store','method'=>"post",'files'=>true]) }}
                            @include('graduation.form-graduation',["button"=>"Save Graduation"])
                        {{ Form::close() }}
                    </div>
                </div>
            </div>
        </div>
        {{-- Graduation Form End --}}

        {{-- Graduation Lists Start --}}
        <div class="col-xl-12 col-lg-12 col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Graduations</h4>
                </div>
                <div class="card-body">
                    @include('graduation.graduations')
                </div>
            </div>
        </div>
        {{-- Graduation Lists End --}}

    </div>

@endsection


@section('js')
    <script>
        $(document).on("click",".changeStatus",function () {
           return confirm("Are you sure to change status?");
        });
    </script>

@endsection
