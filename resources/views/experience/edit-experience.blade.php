@extends('layouts.admin')

@section('title','Update Graduation : '.$graduation->name)

@section('content')
<div class="page-titles">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="javascript:void(0)">Graduation</a></li>
        <li class="breadcrumb-item active"><a href="javascript:void(0)">Update {{ $graduation->name }} Profile</a></li>
    </ol>
</div>

<div class="row">
    {{-- Graduation Form Start --}}
    <div class="col-xl-12 col-lg-12 col-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Update Form</h4>
            </div>
            <div class="card-body">
                <div class="basic-form">
                    {{ Form::model($graduation,['route'=>['graduation.update',$graduation->id],'method'=>"post",'files'=>true]) }}
                    @include('graduation.form-graduation',["button"=>"Update Graduation"])
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
                <h4 class="card-title">graduations</h4>
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
$(document).on("click", ".changeStatus", function() {
    return confirm("Are you sure to change status?");
});
</script>

@endsection