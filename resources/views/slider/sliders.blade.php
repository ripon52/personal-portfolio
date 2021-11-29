<div class="table-responsive">
    <table class="table table-hover text-center">
        <thead>
            <tr>
                <th>Title</th>
                <th>Sliders</th>
                <th>Details</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @forelse(sliders() as $key=>$slider_list)
                <tr>
                    <td>{{ $slider_list->title }}</td>
                    <td>
                        <img
                            src="{{ asset('project_files/slider/'.$slider_list->image) }}"
                            height="150"
                            width="150"
                            alt="{{ $slider_list->title }}"
                        />
                    </td>
                    <td>{{ $slider_list->description }}</td>
                    <td>
                        @if(isset($slider) && $slider->id == $slider_list->id)
                            <a href="#" class="badge badge-rounded badge-success">Updating....</a>
                         @else
                            <a href="{{ route('slider.edit',$slider_list->id) }}" class="btn-success btn btn-sm"> <i class="fa fa-edit "></i> </a>
                            {{ Form::open(['route'=>['slider.destroy',$slider_list->id],"method"=>'post',"class"=>"destroyForm"]) }}
                                <button type="submit" class="btn btn-danger btn-sm"  onclick="return confirm('Are you sure?')" > <i class="fa fa-trash"></i> </button>
                            {{ Form::close() }}
                        @endif
                    </td>
                </tr>
            @empty

            @endforelse
        </tbody>
    </table>
</div>
