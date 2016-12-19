<?php

namespace App\Http\Controllers\user;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\KenaikanPangkat;
use Illuminate\Http\Request;
use Session;

class KenaikanPangkatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    
    

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
        
        KenaikanPangkat::create($requestData);

        Session::flash('flash_message', 'KenaikanPangkat added!');

        return redirect('user/kenaikanpangkat');
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
        $kenaikanpangkat = KenaikanPangkat::findOrFail($id);

        return view('user.kenaikanpangkat.show', compact('kenaikanpangkat'));
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
        $kenaikanpangkat = KenaikanPangkat::findOrFail($id);

        return view('user.kenaikanpangkat.edit', compact('kenaikanpangkat'));
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
        
        $kenaikanpangkat = KenaikanPangkat::findOrFail($id);
        $kenaikanpangkat->update($requestData);

        Session::flash('flash_message', 'KenaikanPangkat updated!');

        
        return redirect('user/kenaikanpangkat/'.$kenaikanpangkat->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    
}
