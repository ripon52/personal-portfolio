<div class="form-group">
    <label>Category Name.*</label>
    {{ Form::text('name',null,['class'=>'form-control','placeholder'=>'Ex. CSE','required']) }}
</div>


<div class="form-group ">
    {{ Form::submit($button,['class'=>'btn btn-block btn-success']) }}
</div>