<?php

namespace App\Http\Controllers\user;

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

        return view('user.datakepegawaian.index', compact('datakepegawaian'));
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
        
        DataKepegawaian::create($requestData);

        Session::flash('flash_message', 'DataKepegawaian added!');

        return redirect('user/datakepegawaian');
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

        return view('user.datakepegawaian.show', compact('datakepegawaian'));
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

        return view('user.datakepegawaian.edit', compact('datakepegawaian'));
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

        return redirect('user/datakepegawaian/'.$datakepegawaian->id);
       
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    
}
