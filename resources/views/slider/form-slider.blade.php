
    <div class="form-group">
        <label>Slider Title .*</label>
        {{ Form::text('title',null,['class'=>'form-control','placeholder'=>'Ex. Welcome to slider 1','required']) }}
    </div>

    @if(isset($slider))
        <div class="form-group">
            <label>OLD IMAGE</label>
            <img
                src="{{ asset('project_files/slider/'.$slider->image) }}"
                height="150"
                width="150"
                alt="{{ $slider->title }}"
            />
        </div>
    @endif

    <div class="form-group">
        <label>Select IMAGE.*</label>
        {{ Form::file('image',['class'=>'form-control',isset($slider) ? : 'required'])}}

        @error('image')
            <strong class="bg-danger text-white"> {{ $message }}</strong>
        @enderror
    </div>

    <div class="form-group">
        <label>Slider Description.</label>
        {{ Form::textarea( 'description',null,['class'=>'form-control','placeholder'=>'Ex. Slider Details']) }}
    </div>

    <div class="form-group ">
        {{ Form::submit($button,['class'=>'btn btn-block btn-success']) }}
    </div>


