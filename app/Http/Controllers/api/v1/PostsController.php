<?php

namespace App\Http\Controllers\api\v1;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PostsController extends Controller
{
    public function show(Request $request)
    {
        $post = Post::find($request->id);


        if ($post) {
            return response()->json([
                'success' => true,
                'data' => $post,
            ], 200);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'Post Gagal Disimpan!',
            ], 401);
        }
    }

}
