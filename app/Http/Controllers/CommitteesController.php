<?php

namespace App\Http\Controllers;

use App\Models\Committees;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CommitteesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['committee']=Committees::all();
        //dd($data);
        return view('backend.mainpage.committee.view',$data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.mainpage.committee.add_edit_committee');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        DB::transaction(function () use ($request) {
            $data = new Committees();
            $data->title = $request->title;
            $data->name = $request->name;
            $data->affil = $request->affiliation;
            $data->committee = $request->committee;
            $data->save();
        });

        return redirect()->route('committees.view')->with('success', ' Speaker Info Updated Successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Committees $committees)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Committees $committees,$id)
    {
        $data['editData']=Committees::where('id',$id)->first();

        return view('backend.mainpage.committee.add_edit_committee',$data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,$id)
    {
        DB::transaction(function () use ($request, $id) {
            $data = Committees::where('id', $id)->first();
            $data->title = $request->title;
            $data->name = $request->name;
            $data->affil = $request->affiliation;
            $data->committee = $request->committee;
            $data->save();
        });

        return redirect()->route('committees.view')->with('success', ' Speaker Info Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Committees $committees, $id)
    {
        $data=Committees::find($id);
        // dd($data);
        $data->delete();
        return redirect()->route('committees.view');
    }
}
