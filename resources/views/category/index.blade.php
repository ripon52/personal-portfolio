@extends('layouts.admin')

@section('title','New Category')

@section('content')
<div class="page-titles">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="javascript:void(0)">Category</a></li>
        <li class="breadcrumb-item active"><a href="javascript:void(0)">New Category</a></li>
    </ol>
</div>

<div class="row">
    {{-- Category Form Start --}}
    <div class="col-xl-4 col-lg-4 col-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Category Form</h4>
            </div>
            <div class="card-body">
                <div class="basic-form">
                    {{ Form::open(['route'=>'category.store','method'=>"post"]) }}
                    @include('category.form-category',["button"=>"Save Category"])
                    {{ Form::close() }}
                </div>
            </div>
        </div>
    </div>
    {{-- Category Form End --}}

    {{-- Category Lists Start --}}
    <div class="col-xl-8 col-lg-8 col-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">categories</h4>
            </div>
            <div class="card-body">
                @include('category.categories')
            </div>
        </div>
    </div>
    {{-- Category Lists End --}}

</div>

@endsection


@section('js')
<script>
$(document).on("click", ".changeStatus", function() {
    return confirm("Are you sure to change status?");
});
</script>

@endsection