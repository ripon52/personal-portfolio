<div class="table-responsive">
    <table class="table table-hover">
        <thead>
            <tr>
                <th>SL</th>
                <th>Author</th>
                <th>Publisher</th>
                <th>Year</th>
                <th>DOI</th>
                <th>Category</th>
                <th>Title</th>
                <th>Body</th>
                <th>is Article?</th>
                <th>Image Files</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @forelse(Articles() as $key=>$article_list)
            <tr>
                <td> {{ $loop->iteration }}</td>
                <td>{{ $article_list->author }}</td>
                <td>{{ $article_list->publisher }}</td>
                <td>{{ $article_list->year }}</td>
                <td>{{ $article_list->doi }}</td>
                <td>{{ $article_list->category->name }}</td>
                <td>{{ $article_list->title }}</td>
                <td>{{ $article_list->body }}</td>
                <td>
                    @if($article_list->isArticle ==1 )
                    <button class="btn btn-info"> Article</button>
                    @else
                    <button class="btn btn-primary"> Resource</button>
                    @endif
                </td>
                <td>
                    @forelse ($article_list->files as $key=>$file)
                    <a href="{{ asset('project_files/articleResource/'.$file->name) }}" target="_blank">
                        <img src="{{ asset('project_files/articleResource/'.$file->name) }}" height="70" width="70"
                            alt="">
                    </a>
                    @empty

                    @endforelse
                </td>
                <td>
                    @if(isset($article) && $article->id == $article_list->id)
                    <a href="#" class="badge badge-rounded badge-success">Updating....</a>
                    @else
                    <a href="{{ route('article.edit',$article_list->id) }}" class="btn-success btn btn-sm"> <i
                            class="fa fa-edit "></i> </a>
                    {{ Form::open(['route'=>['article.destroy',$article_list->id],"method"=>'post',"class"=>"destroyForm"]) }}
                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')"> <i
                            class="fa fa-trash"></i> </button>
                    {{ Form::close() }}
                    @endif
                </td>
            </tr>
            @empty
            <tr>
                <td colspan="8">No Article Found</td>
            </tr>
            @endforelse
        </tbody>
    </table>
</div>
