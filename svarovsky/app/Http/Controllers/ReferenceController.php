<?php

namespace App\Http\Controllers;

use App\Mail\Reference;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

class ReferenceController extends Controller
{
    public function index()
    {
        $references = DB::table('references')->where('status', 1)->orderBy('created_at', 'desc')->get();

        return view('reference.list', compact('references'));
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


        DB::table('references')->insert([
            'name' => $request->name,
            'email' => $request->email,
            'text' => $request->text,
            'created_at' => date("Y-m-d H:i:s"),
        ]);

        $name = $request->name;

        Mail::to('robert.galovic@seznam.cz')->send(new Reference($name));

        $request->session()->flash('success', "Děkuji. Recenze byla přijata ke schválení.");

        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($href)
    {

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
