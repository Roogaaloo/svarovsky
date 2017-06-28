<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactAdmin;
use App\Mail\ContactUser;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('template.contact');
    }

    public function indexAdmin()
    {


        $heading = 'Kontakt';

        return view('admin.contact.list', compact('heading'));
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
        DB::table('forms')->insert([
            'name' => $request->name,
            'email' => $request->email,
            'text' => $request->text,
        ]);

        $name = $request->name;
        $email = $request->email;
        $text = $request->text;


        Mail::to('robert.galovic@seznam.cz')->send(new ContactAdmin($name, $email, $text));

        Mail::to($email)->send(new ContactUser($text));

        $request->session()->flash('success', "Děkuji. Vaše zpráva byla úspěšně odeslána. Budu Vás co nejdříve kontaktovat.");

        return back();
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
