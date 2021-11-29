@extends('layouts.admin')

@section('title','Update Slider : '.$slider->name)

@section('content')
    <div class="page-titles">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javascript:void(0)">Slider</a></li>
            <li class="breadcrumb-item active"><a href="javascript:void(0)">Update {{ $slider->name }} Profile</a></li>
        </ol>
    </div>

    <div class="row">
        {{-- Slider Form Start --}}
        <div class="col-xl-4 col-lg-4 col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Update Form</h4>
                </div>
                <div class="card-body">
                    <div class="basic-form">
                        {{ Form::model($slider,['route'=>['slider.update',$slider->id],'method'=>"post",'files'=>true]) }}
                        @include('slider.form-slider',["button"=>"Update Slider"])
                        {{ Form::close() }}
                    </div>
                </div>
            </div>
        </div>
        {{-- Slider Form End --}}

        {{-- Slider Lists Start --}}
        <div class="col-xl-8 col-lg-8 col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Sliders</h4>
                </div>
                <div class="card-body">
                    @include('slider.sliders')
                </div>
            </div>
        </div>
        {{-- Slider Lists End --}}

    </div>

@endsection


@section('js')
    <script>
        $(document).on("click",".changeStatus",function () {
            return confirm("Are you sure to change status?");
        });
    </script>

@endsection
