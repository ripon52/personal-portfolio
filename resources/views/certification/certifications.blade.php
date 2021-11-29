<div class="table-responsive">
    <table class="table table-hover">
        <thead>
            <tr>
                <th>Name</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>

            @forelse(certifications() as $key=>$certification_list)
            <tr>
                <td>{{ $certification_list->name }}</td>
                <td>
                    @if(isset($certification) && $certification->id == $certification_list->id)
                    <a href="#" class="badge badge-rounded badge-success">Updating....</a>
                    @else
                    <a href="{{ route('certification.edit',$certification_list->id) }}" class="btn-success btn btn-sm"> <i
                            class="fa fa-edit "></i> </a>
                    {{ Form::open(['route'=>['certification.destroy',$certification_list->id],"method"=>'post',"class"=>"destroyForm"]) }}
                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')"> <i
                            class="fa fa-trash"></i> </button>
                    {{ Form::close() }}
                    @endif
                </td>
            </tr>
            @empty
            <tr>
                <td colspan="5">No Certification Found</td>
            </tr>
            @endforelse
        </tbody>
    </table>
</div>
