@extends('layouts.admin')

@section('title','Update Certification : '.$certification->name)

@section('content')
<div class="page-titles">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="javascript:void(0)">Certification</a></li>
        <li class="breadcrumb-item active"><a href="javascript:void(0)">Update {{ $certification->name }} Profile</a>
        </li>
    </ol>
</div>

<div class="row">
    {{-- Certification Form Start --}}
    <div class="col-xl-4 col-lg-4 col-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Update Form</h4>
            </div>
            <div class="card-body">
                <div class="basic-form">
                    {{ Form::model($certification,['route'=>['certification.update',$certification->id],'method'=>"post"]) }}
                    @include('certification.form-certification',["button"=>"Update Certification"])
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