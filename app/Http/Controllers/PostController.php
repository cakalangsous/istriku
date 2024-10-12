<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\PostCategory;
use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\View\View;

class PostController extends Controller
{
    protected $data;

    public function __construct() {

        parent::isInstalled();
        
        $this->data['categories'] = PostCategory::all();
        $this->data['title'] = 'Home';
        $this->data['description'] = 'Website ini dibuat untuk berbagi renungan, berbagi ilmu, dan berbagi cerita. Semoga apa yang dibagikan di website ini dapat bermanfaat untuk pembaca.';
        $this->data['keywords'] = 'Valerie Jelita Lumempow, Renungan, Renungan Harian, Cerita, GMIM, Gereja, Gereja Masehi Injili di Minahasa';
        $this->data['active'] = 'home';
    }
    public function index()
    {
        $this->data['posts'] = Post::query()->with('category')->where('publish_status', 1)->orderBy('id', 'desc')->paginate(10);
        return view('frontend.home', $this->data);
    }
    
    public function show($slug) : View
    {
        $this->data['post'] = Post::query()->with(['category', 'tags'])->where(['slug' => $slug, 'publish_status' => 1])->firstOrFail();
        $this->data['relatedPosts'] = Post::query()->with('category')->where('id', '!=', $this->data['post']->id)->where('publish_status', 1)->limit(4)->get();

        $this->data['title'] = $this->data['post']->title;
        $this->data['keywords'] = $this->data['post']->meta_keywords;
        $this->data['description'] = $this->data['post']->meta_description;
        $this->data['active'] = $this->data['post']->category->name;
        return view('frontend.show', $this->data);
    }

    public function postsByCategory($slug) : View
    {
        $this->data['data'] = PostCategory::query()->where('slug', $slug)->firstOrFail();
        $this->data['posts'] = PostCategory::query()->with('posts')->where('slug', $slug)->firstOrFail()->posts()->where('publish_status', 1)->paginate(10);
        $this->data['title'] = ucwords($this->data['data']->name);
        $this->data['active'] = $this->data['data']->name;
        return view('frontend.posts', $this->data);
    }

    public function postsByTag($slug) : View
    {
        $this->data['data'] = Tag::query()->where('slug', $slug)->firstOrFail();
        $this->data['posts'] = Tag::query()->with('posts')->where('slug', $slug)->firstOrFail()->posts()->where('publish_status', 1)->paginate(10);
        $this->data['title'] = ucwords($this->data['data']->name);
        $this->data['active'] = $this->data['data']->name;
        return view('frontend.posts', $this->data);
    }

    public function search(Request $request) : View
    {
        $this->data['data'] = (Object) ['name' => $request->q];
        $this->data['posts'] = Post::query()->where('title', 'like', '%' . $request->q . '%')->where('publish_status', 1)->paginate(10);
        $this->data['title'] = $request->q;
        $this->data['active'] = $request->q;
        return view('frontend.posts', $this->data);    
    }
}
