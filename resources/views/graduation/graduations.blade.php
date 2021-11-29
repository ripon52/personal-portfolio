<div class="table-responsive">
    <table class="table table-hover">
        <thead>
            <tr>
                <th>SL</th>
                <th>Certificate</th>
                <th>Title</th>
                <th>Institution</th>
                <th>Session</th>
                <th>Passing Year </th>
                <th>Notes</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @forelse(graduations() as $key=>$graduation_list)
            <tr>
                <td> {{ $loop->iteration }}</td>
                <td>{{ $graduation_list->certificate->name }}</td>
                <td>{{ $graduation_list->title }}</td>
                <td>{{ $graduation_list->institute }}</td>
                <td>{{ $graduation_list->session }}</td>
                <td>{{ $graduation_list->passing_year }}</td>
                <td>{{ $graduation_list->notes }}</td>
                <td>
                    @if(isset($graduation) && $graduation->id == $graduation_list->id)
                    <a href="#" class="badge badge-rounded badge-success">Updating....</a>
                    @else
                    <a href="{{ route('graduation.edit',$graduation_list->id) }}" class="btn-success btn btn-sm"> <i
                            class="fa fa-edit "></i> </a>
                    {{ Form::open(['route'=>['graduation.destroy',$graduation_list->id],"method"=>'post',"class"=>"destroyForm"]) }}
                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')"> <i
                            class="fa fa-trash"></i> </button>
                    {{ Form::close() }}
                    @endif
                </td>
            </tr>
            @empty
            <tr>
                <td colspan="8">No Graduation Found</td>
            </tr>
            @endforelse
        </tbody>
    </table>
</div>