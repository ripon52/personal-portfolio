<div class="form-group">
    <label>Skill Name.*</label>
    {{ Form::text('name',null,['class'=>'form-control','placeholder'=>'Ex. CSE','required']) }}
</div>

<div class="form-group">
    <label>Percentage.*</label>
    {{ Form::number('percentage',null,['class'=>'form-control','placeholder'=>'Ex. 90','required']) }}
</div>

<div class="form-group ">
    {{ Form::submit($button,['class'=>'btn btn-block btn-success']) }}
</div>
