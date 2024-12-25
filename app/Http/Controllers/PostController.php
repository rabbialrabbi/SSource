<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePostRequest;
use App\Http\Requests\UpdatePostRequest;
use App\Http\Resources\PostResource;
use App\Models\Post;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        try {
            $posts = Post::all();

            return PostResource::collection($posts);
        } catch (\Exception $e) {
            return response()->json(['message' => 'An error occurred while fetching the posts.'], 500);
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePostRequest $request)
    {
        try {
            $post = Post::create($request->validated());

            return PostResource::make($post);
        } catch (\Exception $e) {
            return response()->json(['message' => 'An error occurred while creating the post.'], 500);
        }
    }
}
