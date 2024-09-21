<?php

namespace App\Http\Controllers;

use App\Models\Chair;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ChairController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['chair']=Chair::first();
        //dd($data);
        return view('backend.mainpage.chair.view',$data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Chair $chair)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Chair $chair)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Chair $chair)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Chair $chair)
    {
        //
    }
}