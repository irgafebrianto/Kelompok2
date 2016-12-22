<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\DataKepegawaian;
use Illuminate\Http\Request;
use Session;

class DataKepegawaianController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $datakepegawaian = DataKepegawaian::paginate(25);

        return view('admin.datakepegawaian.index', compact('datakepegawaian'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin.datakepegawaian.create');
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
        
        DataKepegawaian::create($requestData);

        Session::flash('flash_message', 'DataKepegawaian added!');

        return redirect('admin/datakepegawaian');
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
        $datakepegawaian = DataKepegawaian::findOrFail($id);

        return view('admin.datakepegawaian.show', compact('datakepegawaian'));
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
        $datakepegawaian = DataKepegawaian::findOrFail($id);

        return view('admin.datakepegawaian.edit', compact('datakepegawaian'));
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
        
        $datakepegawaian = DataKepegawaian::findOrFail($id);
        $datakepegawaian->update($requestData);

        Session::flash('flash_message', 'DataKepegawaian updated!');

        return redirect('admin/datakepegawaian');
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
        DataKepegawaian::destroy($id);

        Session::flash('flash_message', 'DataKepegawaian deleted!');

        return redirect('admin/datakepegawaian');
    }
}
