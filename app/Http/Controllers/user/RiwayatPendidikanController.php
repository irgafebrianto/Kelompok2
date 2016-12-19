<?php

namespace App\Http\Controllers\user;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\RiwayatPendidikan;
use Illuminate\Http\Request;
use Session;

class RiwayatPendidikanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $riwayatpendidikan = RiwayatPendidikan::paginate(25);

        return view('user.riwayatpendidikan.index', compact('riwayatpendidikan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    
    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        
        $requestData = $request->all();
        
        RiwayatPendidikan::create($requestData);

        Session::flash('flash_message', 'RiwayatPendidikan added!');

        return redirect('user/riwayatpendidikan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function show($id)
    {
        $riwayatpendidikan = RiwayatPendidikan::findOrFail($id);

        return view('user.riwayatpendidikan.show', compact('riwayatpendidikan'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function edit($id)
    {
        $riwayatpendidikan = RiwayatPendidikan::findOrFail($id);

        return view('user.riwayatpendidikan.edit', compact('riwayatpendidikan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update($id, Request $request)
    {
        
        $requestData = $request->all();
        
        $riwayatpendidikan = RiwayatPendidikan::findOrFail($id);
        $riwayatpendidikan->update($requestData);

        Session::flash('flash_message', 'RiwayatPendidikan updated!');

        return redirect('user/riwayatpendidikan/'.$riwayatpendidikan->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    
}
