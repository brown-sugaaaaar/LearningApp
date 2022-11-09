<?php

namespace App\Http\Controllers;

use App\Post;
use App\Category;
use Illuminate\Http\Request;

class PostCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request, $name)
    {
        //◆カテゴリごとにbladeファイルを作成して$templateを出し分ける(php_index.blade.phpだけ作った)
        // $posts = Post::all();

        // foreach($posts as $post) {
        //     if($post->category_id === 1) {
        //         $template = 'category.php_index';
        //     }
        // }

        // return view($template,
        // [
        //   'posts' => $posts
        // ]);

        //◆共通のbladeファイル（index.blade.php）を使って、カテゴリごとにページを出し分ける
        $category = Category::where('name',$name)->first();

        $post_category_index = Post::where('category_id',$category->id)
            ->orderBy('created_at','DESC')
            ->get();

        return view('category.index',
          [
            'post_category_index' => $post_category_index
          ]);
        }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($name, $id)
    {
        // $category = Category::where('name',$name)->first();
        $post = Post::find($id);

        return view('category.detail',
        [
          'post' => $post
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
