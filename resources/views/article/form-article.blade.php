<div class="row">

    <div class="col-lg-3">
        <div class="form-group">
            <label>Author*</label>
            {{ Form::text('author',null,['class'=>'form-control','placeholder'=>'Ex. Linkhon Chy','required']) }}
        </div>
    </div>

    <div class="col-lg-3">
        <div class="form-group">
            <label>Publisher.*</label>
            {{ Form::text('publisher',null,['class'=>'form-control','placeholder'=>'Ex. Google Publisher','required']) }}
        </div>
    </div>

    <div class="col-lg-3">
        <div class="form-group">
            <label>Year.*</label>
            {{ Form::text('year',null,['class'=>'form-control','placeholder'=>'Ex. '.Date('Y')]) }}
        </div>
    </div>

    <div class="col-lg-3">
        <div class="form-group">
            <label>DOI.*</label>
            {{ Form::text('doi',null,['class'=>'form-control','placeholder'=>'Ex. '.rand(1111,9999),'required']) }}
        </div>
    </div>
    <div class="col-lg-3">
        <div class="form-group">
            <label>Select Category</label>
            {{ Form::select('category_id',category_pluck(),isset($article) ? $article->category_id : false,['class'=>'form-control','required']) }}
        </div>
    </div>


    <div class="col-lg-3">
        <div class="form-group">
            <label>Article/Resource Title.*</label>
            {{ Form::text('title',null,['class'=>'form-control','placeholder'=>'Ex. Big Data Handling....','required']) }}
        </div>
    </div>

    <div class="col-lg-3">
        <div class="form-group">
            <label>Article/Resource Date & Time.*</label>
            {{ Form::date('datetime',null,['class'=>'form-control','required']) }}
        </div>
    </div>


    <div class="col-lg-3">
        <div class="form-group">
            <label>Select Is Article/Resource</label>
            {{ Form::select('isArticle',['1'=>'Article', '2'=>'Resource'],true,['class'=>'form-control','required']) }}
        </div>
    </div>



    <div class="col-lg-9">
        <div class="form-group">
            <label>Article/Resource Description.</label>
            {{ Form::textarea( 'body',null,['class'=>'form-control','placeholder'=>'Ex. Article/Resource Details']) }}
        </div>
    </div>


    <div class="col-lg-3">
        <div class="form-group">
            <label>Article/Resources Image Files.</label>
            {{ Form::file( 'images[]',['class'=>'form-control','access'=>'images/*','multiple']) }}
        </div>
    </div>


    <div class="col-lg-3">
        <div class="form-group ">
            {{ Form::submit($button,['class'=>'btn btn-block btn-success']) }}
        </div>
    </div>

</div>
