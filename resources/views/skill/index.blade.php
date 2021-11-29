@extends('layouts.admin')

@section('title','New Skill')

@section('content')
<div class="page-titles">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="javascript:void(0)">Skill</a></li>
        <li class="breadcrumb-item active"><a href="javascript:void(0)">New Skill</a></li>
    </ol>
</div>

<div class="row">
    {{-- Skill Form Start --}}
    <div class="col-xl-4 col-lg-4 col-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Skill Form</h4>
            </div>
            <div class="card-body">
                <div class="basic-form">
                    {{ Form::open(['route'=>'skill.store','method'=>"post"]) }}
                    @include('skill.form-skill',["button"=>"Save Skill"])
                    {{ Form::close() }}
                </div>
            </div>
        </div>
    </div>
    {{-- Skill Form End --}}

    {{-- Skill Lists Start --}}
    <div class="col-xl-8 col-lg-8 col-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">categories</h4>
            </div>
            <div class="card-body">
                @include('skill.skills')
            </div>
        </div>
    </div>
    {{-- Skill Lists End --}}

</div>

@endsection


@section('js')
<script>
$(document).on("click", ".changeStatus", function() {
    return confirm("Are you sure to change status?");
});
</script>

@endsection
