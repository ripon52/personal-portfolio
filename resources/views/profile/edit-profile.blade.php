@extends('layouts.admin')

@section('title','Update Profile')

@section('content')
<div class="page-titles">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="javascript:void(0)">Profile</a></li>
        <li class="breadcrumb-item active"><a href="javascript:void(0)">New Profile</a></li>
    </ol>
</div>

<div class="row">
    {{-- Profile Form Start --}}
    <div class="col-xl-12 col-lg-12 col-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Profile Form</h4>
            </div>
            <div class="card-body">
                <div class="basic-form">
                    {{ Form::model($user,['route'=>['profile.update',1],'method'=>"post",'files'=>true]) }}
                    @include('profile.form-profile',["button"=>"Save Profile"])
                    {{ Form::close() }}
                </div>
            </div>
        </div>
    </div>
    {{-- Profile Form End --}}


</div>

@endsection


@section('js')
<script>
$(document).on("click", ".changeStatus", function() {
    return confirm("Are you sure to change status?");
});
</script>

@endsection

@section('css')
<style>
.imageDIv {}

.imageDIv img {
    height: 100px;
    width: 100px
}

.imageDIv a {
    background-color: orangered;
    color: #fff;
    padding: 10px 20px;
    border-radius: 10px;
    display: inline-block;
}
</style>

@endsection