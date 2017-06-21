<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $about = DB::table('about')->first();

        $partners = DB::table('partners')->where('status', 1)->get();

        $category = array();

        foreach($partners as $p){
            if($p->category){
                if(!in_array($p->category, $category)){
                    array_push($category, $p->category);
                }
            }
         }

        return view('template.about', compact('about','partners', 'category'));
    }

    public function indexAdmin()
    {
        $about = DB::table('about')->first();

        $partners = DB::table('partners')->where('status', 1)->get();

        $category = array();

        foreach($partners as $p){
            if($p->category){
                if(!in_array($p->category, $category)){
                    array_push($category, $p->category);
                }
            }
        }

        $heading = 'Proč se mnou';

        return view('admin.about.list', compact('about','partners', 'category', 'heading'));
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
    public function show($id)
    {
        //
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
