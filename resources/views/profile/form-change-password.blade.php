<div class="row">

    <div class="col-lg-3">
        <div class="form-group">
            <label>Old Password</label>
            {{ Form::password('password',['class'=>'form-control','required','minlength'=>6]) }}
        </div>
    </div>

    <div class="col-lg-3">
        <div class="form-group">
            <label>New Password</label>
            {{ Form::password('newPassword',['class'=>'form-control','required','minlength'=>6]) }}
        </div>
    </div>

    <div class="col-lg-3">
        <div class="form-group ">
            <br>
            {{ Form::submit($button,['class'=>'btn btn-block btn-success']) }}
        </div>
    </div>

</div>
