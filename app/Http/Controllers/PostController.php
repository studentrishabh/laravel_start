<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Validation\ValidationException;

class PostController extends Controller
{
    // Show all posts
    public function index()
    {
        $posts = Post::all();
        return view('posts.index', compact('posts'));
    }

    // Show create post form
    public function create()
    {
        return view('posts.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email|unique:posts',
            'mobile' => 'required|max:10',
            'city' => 'required',
            'status' => 'required|in:active,inactive',
            'password' => 'required|min:8',

        ]);

        Post::create($request->only('name', 'email','mobile','city','status','password'));

        return redirect()->route('posts.index')->with('success', 'Post created successfully.');
    }
    public function show($id){
        $post = Post::find($id);
        return view('posts.show', compact('post'));
    }

    public function edit($id)
    {
        $post = Post::find($id);

        if (!$post) {
            return redirect()->route('posts.index')->with('error', 'Post not found');
        }

        return view('posts.edit', compact('post'));
    }
    public function update(Request $request, $id)
    {
        $post = Post::findOrFail($id);
        $post->update($request->all());
        return redirect()->route('posts.index')->with(['success' => 'Post updated successfully']);
    }
    
      // Return success response
        // return response()->json(['success' => 'Post updated successfully']);
        // return redirect()->route('posts.index',['success' => 'Post updated successfully']);


 

    public function destroy($id)
    {
        $post = Post::findOrFail($id);
        $post->delete();

        return response()->json(['success' => 'Post deleted successfully']);
    }
}




