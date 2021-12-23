<div class="row">

    <div class="col-lg-3">
        <div class="form-group">
            <label>Designation Name.*</label>
            {{ Form::text('designation',null,['class'=>'form-control','placeholder'=>'Ex. Senior Employee','required']) }}
            @error('designation')
            <br>
            <div class="alert alert-danger"> <p>{{ $message }}</p>  </div>
            @enderror
        </div>
    </div>

    <div class="col-lg-3">
        <div class="form-group">
            <label>Organization Name.*</label>
            {{ Form::text('organization',null,['class'=>'form-control','placeholder'=>'Ex. East Delta University','required']) }}
            @error('organization')
            <br>
            <div class="alert alert-danger"> <p>{{ $message }}</p>  </div>
            @enderror
        </div>
    </div>

    <div class="col-lg-3">
        <div class="form-group">
            <label>Start Date</label>
            {{ Form::date('join_date',null,['class'=>'form-control','required']) }}
            @error('join_date')
            <br>
            <div class="alert alert-danger"> <p>{{ $message }}</p>  </div>
            @enderror
        </div>
    </div>

    <div class="col-lg-3">
        <div class="form-group">
            <label>End Date</label>
            {{ Form::date('left_date',null,['class'=>'form-control','required']) }}
            @error('left_date')
            <br>
            <div class="alert alert-danger"> <p>{{ $message }}</p>  </div>
            @enderror
        </div>
    </div>

    <div class="col-lg-3">
        <div class="form-group">
            <label>Display Show Position</label>
            {{ Form::number('position',null,['class'=>'form-control','required','placeholder'=>'Ex. 1']) }}
            @error('position')
                <br>
                <div class="alert alert-danger"> <p>{{ $message }}</p>  </div>
            @enderror
        </div>
    </div>


    <div class="col-lg-9">
        <div class="form-group">
            <label>Experience Description.</label>
            {{ Form::textarea('body',null,['class'=>'form-control','placeholder'=>'Ex. Experience Details']) }}
            @error('body')
            <br>
            <div class="alert alert-danger"> <p>{{ $message }}</p>  </div>
            @enderror
        </div>
    </div>

    <div class="col-lg-3">
        <div class="form-group ">
            {{ Form::submit($button,['class'=>'btn btn-block btn-success']) }}
        </div>
    </div>

</div>
