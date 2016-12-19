<?php

namespace App\Http\Controllers\user;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\DataAnak;
use Illuminate\Http\Request;
use Session;
use App\Pegawai;

class DataAnakController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $dataanak = DataAnak::paginate(25);

        return view('user.dataanak.index', compact('dataanak'));
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
        
        DataAnak::create($requestData);

        Session::flash('flash_message', 'DataAnak added!');

        return redirect('user/dataanak');
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
        $dataanak = DataAnak::findOrFail($id);
        $pegawai = $dataanak->pegawai;
        return view('user.dataanak.show', compact('dataanak','pegawai'));
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
        $dataanak = DataAnak::findOrFail($id);

        return view('user.dataanak.edit', compact('dataanak'));
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
        
        $dataanak = DataAnak::findOrFail($id);
        $dataanak->update($requestData);

        Session::flash('flash_message', 'DataAnak updated!');

        return redirect('user/dataanak/'.$dataanak->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        DataAnak::destroy($id);

        Session::flash('flash_message', 'DataAnak deleted!');

        return redirect('user/dataanak');
    }
}
