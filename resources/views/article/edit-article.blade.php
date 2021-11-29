@extends('layouts.admin')

@section('title','Update Article : '.$article->name)

@section('content')
<div class="page-titles">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="javascript:void(0)">Article</a></li>
        <li class="breadcrumb-item active"><a href="javascript:void(0)">Update {{ $article->name }} Profile</a></li>
    </ol>
</div>

<div class="row">
    {{-- Article Form Start --}}
    <div class="col-xl-12 col-lg-12 col-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Update Form</h4>
            </div>
            <div class="card-body">
                <div class="basic-form">
                    {{ Form::model($article,['route'=>['article.update',$article->id],'method'=>"post",'files'=>true]) }}
                    @include('article.form-article',["button"=>"Update Article"])
                    {{ Form::close() }}
                </div>
            </div>
        </div>
    </div>
    {{-- Article Form End --}}

    {{-- Article Lists Start --}}
    <div class="col-xl-12 col-lg-12 col-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Articles</h4>
            </div>
            <div class="card-body">
                @include('article.articles')
            </div>
        </div>
    </div>
    {{-- Article Lists End --}}

</div>

@endsection


@section('js')
<script>
$(document).on("click", ".changeStatus", function() {
    return confirm("Are you sure to change status?");
});
</script>

@endsection
