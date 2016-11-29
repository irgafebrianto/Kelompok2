<?php

namespace App\Http\Controllers;

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
    public function index()
    {
        $kenaikanpangkat = KenaikanPangkat::paginate(25);

        return view('admin.kenaikanpangkat.index', compact('kenaikanpangkat'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin.kenaikanpangkat.create');
    }

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

        return redirect('admin/kenaikanpangkat');
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

        return view('admin.kenaikanpangkat.show', compact('kenaikanpangkat'));
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

        return view('admin.kenaikanpangkat.edit', compact('kenaikanpangkat'));
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

        return redirect('admin/kenaikanpangkat');
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
        KenaikanPangkat::destroy($id);

        Session::flash('flash_message', 'KenaikanPangkat deleted!');

        return redirect('admin/kenaikanpangkat');
    }
}
