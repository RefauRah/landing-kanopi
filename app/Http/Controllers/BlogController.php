<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Category;

class BlogController extends Controller
{
    public function index(Post $post){
        $category_widget = Category::all();
        $data = $post->latest()->take(4)->get();
        $data2 = $post->latest()->take(6)->get();
        $data3 = $post->latest()->take(6)->get();
        return view('blog', compact('data','data2','data3','category_widget'));
    }

    public function profil(Post $post){
        $category_widget = Category::all();
        $data = $post->latest()->get();
        return view('blog.profil', compact('data', 'category_widget'));
    }

    public function kontak(Post $post){
        $category_widget = Category::all();
        $data = $post->latest()->get();
        return view('blog.kontak', compact('data', 'category_widget'));
    }

    public function isi_blog($slug){
        $category_widget = Category::all();
        $data = Post::where('slug', $slug)->get();
        return view('blog.isi_post', compact('data','category_widget'));
    }

    public function list_post(Post $post){
        $category_widget = Category::all();
        $data = $post->latest()->paginate(6);
        return view('blog.list_post',compact('data','category_widget'));
    }

    public function list_category(Category $category){
        $category_widget = Category::all();
        $data = $category->post()->paginate(4);
        return view('blog.list_post',compact('data','category_widget'));
    }

    public function cari(request $request){
        $category_widget = Category::all();
        $data = Post::where('judul', $request->cari)->orWhere('judul','like','%'.$request->cari.'%')->paginate(6);
        return view('blog.list_post',compact('data','category_widget'));
    }
}
