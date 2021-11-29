@extends('layouts.admin')

@section('title','New Certification')

@section('content')
<div class="page-titles">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="javascript:void(0)">Certification</a></li>
        <li class="breadcrumb-item active"><a href="javascript:void(0)">New Certification</a></li>
    </ol>
</div>

<div class="row">
    {{-- Certification Form Start --}}
    <div class="col-xl-4 col-lg-4 col-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Certification Form</h4>
            </div>
            <div class="card-body">
                <div class="basic-form">
                    {{ Form::open(['route'=>'certification.store','method'=>"post"]) }}
                    @include('certification.form-certification',["button"=>"Save Certification"])
                    {{ Form::close() }}
                </div>
            </div>
        </div>
    </div>
    {{-- Certification Form End --}}

    {{-- Certification Lists Start --}}
    <div class="col-xl-8 col-lg-8 col-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Certification</h4>
            </div>
            <div class="card-body">
                @include('certification.certifications')
            </div>
        </div>
    </div>
    {{-- Certification Lists End --}}

</div>

@endsection


@section('js')
<script>
$(document).on("click", ".changeStatus", function() {
    return confirm("Are you sure to change status?");
});
</script>

@endsection