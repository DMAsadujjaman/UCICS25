<?php

namespace App\Http\Controllers;

use App\Models\KNSpeaker;
use Illuminate\Http\Request;

class KNSpeakerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       $data['allData']=KNSpeaker::all();
        return view('backend.mainpage.keynote.view',$data);
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
    public function show(KNSpeaker $kNSpeaker)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(KNSpeaker $kNSpeaker)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, KNSpeaker $kNSpeaker)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(KNSpeaker $kNSpeaker)
    {
        //
    }
}
