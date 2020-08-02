<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Category;
use App\Tags;
use App\Type;

class BlogController extends Controller
{
    public function index(Post $post){
        $category_widget = Category::all();
        $tags = Tags::all();
        $data = $post->latest()->take(6)->get();

        $new = $post->join('types','posts.id','=','types.id')->where('types.id', '=', 5)->take(4)->get();
        $hot = $post->latest()->take(6)->get();
        return view('blog', compact('data','new','hot','category_widget','tags'));
    }

    public function profil(Post $post){
        $category_widget = Category::all();
        $tags = Tags::all();
        $data = $post->latest()->get();
        return view('blog.profil', compact('data', 'category_widget','tags'));
    }

    public function kontak(Post $post){
        $category_widget = Category::all();
        $tags = Tags::all();
        $data = $post->latest()->get();
        return view('blog.kontak', compact('data', 'category_widget','tags'));
    }

    public function isi_blog($slug){
        $category_widget = Category::all();
        $tags = Tags::all();
        $data = Post::latest()->get();
        $isi = Post::where('slug', $slug)->get();
        return view('blog.isi_post', compact('data','isi','category_widget','tags'));
    }

    public function list_post(Post $post){
        $category_widget = Category::all();
        $tags = Tags::all();
        $data = $post->latest()->paginate(6);
        return view('blog.list_post',compact('data','category_widget','tags'));
    }

    public function list_category(Category $category){
        $category_widget = Category::all();
        $tags = Tags::all();
        $data = $category->post()->paginate(4);
        return view('blog.list_post',compact('data','category_widget','tags'));
    } 

    public function cari(request $request){
        $category_widget = Category::all();
        $tags = Tags::all();
        $data = Post::where('judul', $request->cari)->orWhere('judul','like','%'.$request->cari.'%')->paginate(6);
        return view('blog.list_post',compact('data','category_widget','tags'));
    }
}
