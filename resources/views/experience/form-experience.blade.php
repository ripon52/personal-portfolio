<div class="row">

    <div class="col-lg-3">
        <div class="form-group">
            <label>Graduation Name.*</label>
            {{ Form::text('title',null,['class'=>'form-control','placeholder'=>'Ex. Bsc Graduate from ....','required']) }}
        </div>
    </div>

    <div class="col-lg-3">
        <div class="form-group">
            <label>Graduate Institution Name.*</label>
            {{ Form::text('institute',null,['class'=>'form-control','placeholder'=>'Ex. East Delta University','required']) }}
        </div>
    </div>

    <div class="col-lg-3">
        <div class="form-group">
            <label>Graduation Certificate</label>
            {{ Form::select('certificate_title_id',certification_pluck(),isset($graduation) ? $graduation->certificate_title_id : false,['class'=>'form-control','required']) }}

        </div>
    </div>


    <div class="col-lg-3">
        <div class="form-group">
            <label>Graduation Session</label>
            {{ Form::text('session',null,['class'=>'form-control','placeholder'=>'Ex. 06-08','required']) }}
        </div>
    </div>

    <div class="col-lg-3">
        <div class="form-group">
            <label>Passing Year</label>
            {{ Form::text('passing_year',null,['class'=>'form-control','placeholder'=>'Ex. 2003','required']) }}
        </div>
    </div>

    <div class="col-lg-9">
        <div class="form-group">
            <label>Graduation Description.</label>
            {{ Form::textarea( 'notes',null,['class'=>'form-control','placeholder'=>'Ex. Graduation Details']) }}
        </div>
    </div>
    <div class="col-lg-3">
        <div class="form-group ">
            {{ Form::submit($button,['class'=>'btn btn-block btn-success']) }}
        </div>
    </div>

</div>