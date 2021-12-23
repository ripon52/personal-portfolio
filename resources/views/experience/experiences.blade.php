<div class="table-responsive">
    <table class="table table-hover">
        <thead>
            <tr>
                <th>SL</th>
                <th>Designation</th>
                <th>Organization</th>
                <th>Start Date</th>
                <th>End Date</th>
                <th>Details</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @forelse(experiences() as $key=>$experience_list)
            <tr>
                <td> {{ $loop->iteration }}</td>
                <td>{{ $experience_list->designation }}</td>
                <td>{{ $experience_list->organization }}</td>
                <td>{{ $experience_list->join_date }}</td>
                <td>{{ $experience_list->left_date }}</td>
                <td>{{ $experience_list->body }}</td>
                <td>
                    @if(isset($experience) && $experience->id == $experience_list->id)
                    <a href="#" class="badge badge-rounded badge-success">Updating....</a>
                    @else
                    <a href="{{ route('experience.edit',$experience_list->id) }}" class="btn-success btn btn-sm"> <i
                            class="fa fa-edit "></i> </a>
                    {{ Form::open(['route'=>['experience.destroy',$experience_list->id],"method"=>'post',"class"=>"destroyForm"]) }}
                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')"> <i
                            class="fa fa-trash"></i> </button>
                    {{ Form::close() }}
                    @endif
                </td>
            </tr>
            @empty
            <tr>
                <td colspan="8">No Experience Found</td>
            </tr>
            @endforelse
        </tbody>
    </table>
</div>
