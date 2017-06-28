<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Storage;

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

        $heading = 'Proč se mnou';

        return view('admin.about.list', compact('about','partners', 'category', 'heading'));
    }

    public function indexAdminPartners()
    {
        $pojisteni = DB::table('partners')->where('category', 'Pojištění')->get();
        $inv_spol = DB::table('partners')->where('category', 'Investiční společnosti')->get();
        $hypoteka = DB::table('partners')->where('category', 'Hypoteční úvěry')->get();
        $stavebni = DB::table('partners')->where('category', 'Stavební spoření')->get();
        $uvery = DB::table('partners')->where('category', 'Úvěry fyzickým osobám')->get();
        $penzijni = DB::table('partners')->where('category', 'Doplňkové penzijní spoření')->get();
        $nefinancni = DB::table('partners')->where('category', 'Nefinanční produkty')->get();

        $heading = 'Partneři';

        return view('admin.partners.list', compact('pojisteni', 'inv_spol', 'hypoteka', 'stavebni', 'uvery', 'penzijni', 'nefinancni', 'heading'));
    }

    public function update(Request $request)
    {
        DB::table('about')
            ->where('id', 1)
            ->update([
                'text' => $request->text,
            ]);

        if ($request->file('image')) {
            DB::table('about')
                ->where('id', 1)
                ->update([
                    'image' => '/img/about/' . $request->image->getClientOriginalName(),
                ]);
            $request->file('image')->move('img/about', $request->image->getClientOriginalName());
        }

        $request->session()->flash('success', "Sekce proč se mnou upravena!");

        return Redirect::action('AboutController@indexAdmin');
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
