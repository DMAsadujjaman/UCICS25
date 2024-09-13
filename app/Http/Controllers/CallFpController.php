<?php

namespace App\Http\Controllers;

use App\Models\call_fp;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CallFpController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['call_fp']=call_fp::first();
        // dd($data);
        return view('backend.mainpage.call_for_paper.view',$data);
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
    public function show(call_fp $call_fp)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $data['editData']=call_fp::where('id',$id)->first();
        // dd("OK");
        // dd($data['allData']->toArray());
        return view('backend.mainpage.call_for_paper.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        DB::transaction(function () use ($request, $id) {
            $data = call_fp::where('id', $id)->first();
            $data->title = $request->title;
            $data->about = $request->about;
            $data->save();


        });

        return redirect()->route('call_fp.view')->with('success', ' About Info Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(call_fp $call_fp)
    {
        //
    }
}
