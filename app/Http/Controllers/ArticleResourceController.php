<?php

namespace App\Http\Controllers;

use App\ArticleResource;
use App\ArticleResourceFile;
use App\Traits\StoreImageTrait;
use Illuminate\Http\Request;

class ArticleResourceController extends Controller
{
    use StoreImageTrait;
    public function index(){
        return view('article.index');
    }

    public function store(Request $request){

        $this->validate($request,[
            'title'=>"required",
            'category_id'=>'required',
            'datetime'=>'required',
            'isArticle'=>'required',
            'body'=>'required',
        ]);

        $data = $request->all();
        $article = ArticleResource::query()->create($data);

        if ($request->hasFile('images')){
            foreach($request->images as $key=>$image){
                $path = 'project_files/articleResource/';
                $fileName  = $this->imageFileImageStore($request->file('images')[$key], $path, 900,900);
                ArticleResourceFile::query()->create([
                    'article_resource_id'=>$article->id,
                    'name'=>$fileName,
                ]);
            }
        }
        
        session()->flash('success','New Article/Resource Record created.');
        return redirect()->route('article.add');
    }

    public function edit($id)
    {
        $data['article'] = ArticleResource::query()->findOrFail($id);
        return view('article.edit-article')->with($data);
    }

    public function update(Request $request,$id){
        $this->validate($request,[
            'title'=>"required",
            'category_id'=>'required',
            'datetime'=>'required',
            'isArticle'=>'required',
            'body'=>'required',
        ]);
        
        $data = $request->all();
        
        $article= ArticleResource::query()->findOrFail($id);
        $article->update($data);

        if ($request->hasFile('images')){
            foreach($request->images as $key=>$image){
                $path = 'project_files/articleResource/';
                $fileName  = $this->imageFileImageStore($request->file('images')[$key], $path, 900,900);
                ArticleResourceFile::query()->create([
                    'article_resource_id'=>$article->id,
                    'name'=>$fileName,
                ]);
            }
        }
        
        session()->flash('success','Article/Resource record successfully updated.');
        return redirect()->route('article.add');
    }

    public function destroy(Request $request,$id){
        $delete =  ArticleResource::query()->findOrFail($id);
        $delete->delete();
        session()->flash('success',$delete ? "Article/Resource deleted successfully" : "Article/Resource data available at other tables. Can't delete");
        return redirect()->back();
    }
}