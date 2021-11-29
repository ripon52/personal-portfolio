@extends('layouts.admin')

@section('title','Update Skill : '.$skill->name)

@section('content')
<div class="page-titles">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="javascript:void(0)">Skill</a></li>
        <li class="breadcrumb-item active"><a href="javascript:void(0)">Update {{ $skill->name }} Profile</a></li>
    </ol>
</div>

<div class="row">
    {{-- Skill Form Start --}}
    <div class="col-xl-4 col-lg-4 col-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Update Form</h4>
            </div>
            <div class="card-body">
                <div class="basic-form">
                    {{ Form::model($skill,['route'=>['skill.update',$skill->id],'method'=>"post"]) }}
                    @include('skill.form-skill',["button"=>"Update Skill"])
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
