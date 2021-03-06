<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    /*
     * All website designed and programed by Robert Galovič.
     */

    public function index()
    {
        return view('admin.template.home');
    }

    public function logout()
    {

        $this->auth->logout();
        Session::flush('success', 'Úspěšně odhlášeno.');
        return redirect('/');


    }

    public function password()
    {
        return view('admin.template.reset');
    }

    public function reset(Request $request, $id)
    {

        if($request->password == $request->password_check) {

            DB::table('users')
                ->where('id', $id)
                ->update([
                    'password' => bcrypt($request->password),
                ]);

            session()->flash('success', "Heslo bylo změněno.");
            Auth::logout();
            return redirect('/admin');
        }else{
            session()->flash('error', "Hesla se neshodují.");
            return redirect('/admin/reset');
        }
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
