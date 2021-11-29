<div class="row">

    <div class="col-lg-3">
        @if(!empty($user) && !empty($user->avatar))
        <div class="imageDIv">
            <img src="{{ asset('project_files/picture/'.$user->avatar) }}" alt="">
        </div>
        @endif
        <div class="form-group">
            <label>Picture</label>
            {{ Form::file('avatar',null,['class'=>'form-control','required']) }}
        </div>
    </div>

    <div class=" col-lg-3">
        @if(!empty($user) && !empty($user->resume))
        <div class="imageDIv">
            <a href="{{ asset('project_files/resume/'.$user->resume) }}" target="_blank"> Download Resume </a>
        </div>
        @endif
        <div class="form-group">
            <label>Resume</label>
            {{ Form::file('resume',null,['class'=>'form-control','required']) }}
        </div>
    </div>

    <div class="col-lg-3">
        <div class="form-group">
            <label>Phone</label>
            {{ Form::text('phone',!empty($profile) ? $profile->phone :null,['class'=>'form-control','required']) }}
        </div>
    </div>

    <div class="col-lg-3">
        <div class="form-group">
            <label>Date of Birth</label>
            {{ Form::text('website',!empty($profile) ? $profile->website :null,['class'=>'form-control','required']) }}
        </div>
    </div>

    <div class="col-lg-3">
        <div class="form-group">
            <label>Degree</label>
            {{ Form::text('degree',!empty($profile) ? $profile->degree :null,['class'=>'form-control','required']) }}
        </div>
    </div>

    <div class="col-lg-3">
        <div class="form-group">
            <label>Date of Birth</label>
            {{ Form::date('dob',!empty($profile) ? $profile->dob :null,['class'=>'form-control','required']) }}
        </div>
    </div>

    <div class="col-lg-3">
        <div class="form-group">
            <label>Work at*</label>
            {{ Form::text('work_office',!empty($profile) ? $profile->work_office :null,['class'=>'form-control','placeholder'=>'Ex. East Delta University','required']) }}
        </div>
    </div>

    <div class="col-lg-3">
        <div class="form-group">
            <label>Facebook Link</label>
            {{ Form::text('facebook',!empty($profile) ? $profile->facebook :null,['class'=>'form-control','placeholder'=>'Ex. https://www.facebook.com/linkoncu','required']) }}
        </div>
    </div>


    <div class="col-lg-3">
        <div class="form-group">
            <label>Gmail Link</label>
            {{ Form::text('gmail',!empty($profile) ? $profile->gmail :null,['class'=>'form-control','placeholder'=>'Ex. example@email.com','required']) }}
        </div>
    </div>


    <div class="col-lg-3">
        <div class="form-group">
            <label>Linkendin Link</label>
            {{ Form::text('linkedin',!empty($profile) ? $profile->linkedin :null,['class'=>'form-control','placeholder'=>'Ex. https://www.linkedin.com/linkoncu','required']) }}
        </div>
    </div>

    <div class="col-lg-6">
        <div class="form-group">
            <label>Current Address.</label>
            {{ Form::textarea( 'current_address',!empty($profile) ? $profile->current_address :null,['class'=>'form-control','placeholder'=>'Ex. GEC, CTG ']) }}
        </div>
    </div>

    <div class="col-lg-6">
        <div class="form-group">
            <label>Permanent Address.</label>
            {{ Form::textarea( 'permanent_address',!empty($profile) ? $profile->permanent_address :null,['class'=>'form-control','placeholder'=>'Ex. GEC, CTG ']) }}
        </div>
    </div>

    <div class="col-lg-12">
        <div class="form-group">
            <label>About Me </label>
            {{ Form::textarea( 'about',!empty($profile) ? $profile->about :null,['class'=>'form-control','placeholder'=>'Ex. I am database expert ']) }}
        </div>
    </div>


    <div class="col-lg-3">
        <div class="form-group ">
            {{ Form::submit($button,['class'=>'btn btn-block btn-success']) }}
        </div>
    </div>

</div>