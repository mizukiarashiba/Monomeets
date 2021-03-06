<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;


class PostsController extends Controller
{
     public function index()
    {
         $data = [];
        
            $user = \Auth::user();
            $posts = $user->feed_posts()->orderBy('created_at', 'desc')->paginate(10);

            $data = [
                'user' => $user,
                'posts' => $posts,
            ];
        

           // $data += $this->counts($user);
            return view('users.chat', $data);
        
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'saying' => 'required|max:191',
        ]);

        $request->user()->posts()->create([
            'saying' => $request->saying,
        ]);

        return redirect()->back();
    }

    public function destroy($id)
    {
        $post = \App\Post::find($id);

        if (\Auth::id() === $post->user_id) {
            $post->delete();
        }

        return redirect()->back();
    }


}
