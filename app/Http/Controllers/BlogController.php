<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

class BlogController extends Controller
{
    public function index()
    {
        $articles = DB::table('articles')->where('status', 1)->orderBy('created_at', 'asc')->get();

        return view('blog.list', compact('articles'));
    }

    public function indexAdmin()
    {
        $articles = DB::table('articles')->where('status', 1)->orderBy('created_at', 'asc')->get();

        return view('admin.blog.list', compact('articles'));
    }


    public function edit($id){

        $heading = 'Upravit článek';

        $article = DB::table('articles')->where('id', $id)->first();

        return view('admin.blog.edit', compact('article', 'heading'));
    }

    public function update(Request $request, $id){

        DB::table('articles')
            ->where('id', $id)
            ->update([
                'title' => $request->title,
                'image' => $request->image,
                'text' => $request->text,
                'href' => $request->href,
                'status' => $request->status??0,
                'hp_status' => $request->hp_status??0,
            ]);

        $request->session()->flash('success', "Článek byl upraven!");

        return Redirect::action('BlogController@indexAdmin');
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
    public function show($href)
    {

        $article = DB::table('articles')->where('status', 1)->where('href', $href)->first();
        $articles = DB::table('articles')->where('status', 1)->get();



        return view('blog.detail', compact('article', 'articles'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

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
