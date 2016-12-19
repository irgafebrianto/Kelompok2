<?php

namespace App\Http\Controllers\user;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Pegawai;
use Illuminate\Http\Request;
use Session;

class PegawaiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {
        $pegawai = Pegawai::where('nama', 'LIKE', '%'.(isset($request->search)?$request->search:'').'%')
            ->paginate(isset($request->pagination)?$request->pagination:($request->pagination));

        return view('user.pegawai.index', compact('pegawai'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    
    public function store(Request $request)
    {
        
        $requestData = $request->all();
        
        Pegawai::create($requestData);

        Session::flash('flash_message', 'Pegawai added!');

        return redirect('user/pegawai');
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
        $pegawai = Pegawai::findOrFail($id);

        return view('user.pegawai.show', compact('pegawai'));
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
        $pegawai = Pegawai::findOrFail($id);

        return view('user.pegawai.edit', compact('pegawai'));
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
        
        $pegawai = Pegawai::findOrFail($id);
        $pegawai->update($requestData);

        Session::flash('flash_message', 'Pegawai updated!');

        return redirect('user/pegawai');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    
}
