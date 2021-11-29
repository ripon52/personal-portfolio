<div class="table-responsive">
    <table class="table table-hover">
        <thead>
            <tr>
                <th>Name</th>
                <th>Expertness</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>

            @forelse(skills() as $key=>$skill_list)
            <tr>
                <td>{{ $skill_list->name }}</td>
                <td>{{ $skill_list->percentage }}%</td>
                <td>
                    @if(isset($skill) && $skill->id == $skill_list->id)
                    <a href="#" class="badge badge-rounded badge-success">Updating....</a>
                    @else
                    <a href="{{ route('skill.edit',$skill_list->id) }}" class="btn-success btn btn-sm"> <i
                            class="fa fa-edit "></i> </a>
                    {{ Form::open(['route'=>['skill.destroy',$skill_list->id],"method"=>'post',"class"=>"destroyForm"]) }}
                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')"> <i
                            class="fa fa-trash"></i> </button>
                    {{ Form::close() }}
                    @endif
                </td>
            </tr>
            @empty
            <tr>
                <td colspan="5">No Skill Found</td>
            </tr>
            @endforelse
        </tbody>
    </table>
</div>