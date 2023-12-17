<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Support\Facades\DB;
use App\Models\Category;

class PostController extends Controller
{
    public function index(){
        $allPost = Post::paginate(8);
        $sliderPost = Post::take(10)->get();
        // dd($allPost);
        return view('index',['posts'=>$allPost,'sliderPosts'=>$sliderPost]);

    }

    public function post(){
        // $allPost = Post::paginate(8);
        $allPost = Post::all();
        return view('post',['posts'=>$allPost]);
    }

    public function sort($sort){
        if($sort == 'desc'){
            $allPost =  DB::table('posts')->orderByRaw('created_at DESC')->get();
        }elseif($sort == 'asc'){
            $allPost =  DB::table('posts')->orderByRaw('created_at ASC')->get();
        }
        return view('post',['posts'=>$allPost]);
    }

    public function addPost(Request $request){
        $request->validate(
            [
                'titlePost' => 'required',
                'imgPost' => 'required',
                'descriptionPost' => 'required',
            ],
            [
                'titlePost.required' => 'Поле обязательно для заполнения',
                'imgPost.required' => 'Поле обязательно для заполнения',
                'descriptionPost.required' => 'Поле обязательно для заполнения',
            ]
        );
        $name = $request->file('imgPost')->hashName();
        // название файла с его хэшированием
        $request->file('imgPost')->store('public/images');

        // путь файла

        Post::create([
            'title' => $request['titlePost'],
            'image' => $name,
            'category_id' => $request['categorySelect'],
            'description' => $request['descriptionPost']
        ]);

        return redirect('/admin')->with(['succes'=>'Запись добавлена']);
    }

    public function addPostAdmin(){
        $category = Category::all();
        return view('admin.addPost',['category'=>$category]);
    }

    public function admin(){
        $allPost = Post::paginate(8);
        return view('admin.index',['posts'=>$allPost]);

    }

    public function deletePost($id){
        $delete = Post::find($id);
        $delete->delete();
        return redirect('/admin');

    }

    public function editPost($id){
        $postInfo = Post::find($id);
        return view('admin.editPost',['post'=>$postInfo]);

    }

    public function updatePost(Request $request){
        $request->validate(
            [
                "titlePost" => "required",
                "imgPost" => "required",
                "descriptionPost" => "required",
            ],
            [
                "titlePost.required" => "Поле обязательно для заполнения",
                "imgPost.required" => "Поле обязательно для заполнения",
                "descriptionPost.required" => "Поле обязательно для заполнения",
            ]
        );
       $updatePost = $request->all();
       $postNew = Post::find($updatePost['idPost']);
       $photo = $request->file('imgPost');
        if(isset($photo)){
            $name = $request->file('imgPost')->hashName();
            $path = $request->file('imgPost')->store('public/images');
            $postNew->image = $name;
        }
       $postNew->title = $updatePost['titlePost'];
       $postNew->description = $updatePost['descriptionPost'];
       $postNew->save();
       return redirect('/admin');
    }

    public function onePost($id){
        $onePost = Post::find($id);
        return view('onePost',['post'=>$onePost]);

    }



}
