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
    public function edit($id)
    {
        $data['editData']=Chair::where('id',$id)->first();

        // dd($data['allData']->toArray());
        return view('backend.mainpage.chair.chair_edit', $data);
    }
    public function editwelcome($id)
    {
        $data['editData']=Chair::where('id',$id)->first();

        // dd($data['allData']->toArray());
        return view('backend.mainpage.chair.welcome_edit', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        DB::transaction(function () use ($request, $id) {
            $data = Chair::where('id', $id)->first();
            $data->name = $request->name;
            $data->position = $request->position;
            $data->dept = $request->dept;
            $data->address = $request->address;
            $data->email = $request->email;
            $data->extra = $request->extra;
            $data->save();


        });
        return redirect()->route('chair.view')->with('success', ' chair Info Updated Successfully');
    }
    public function updatewelcome(Request $request, $id)
    {

        DB::transaction(function () use ($request, $id) {
            $data = Chair::where('id', $id)->first();
            $data->title = $request->title;
            $data->subtitle = $request->subtitle;
            $data->details = $request->about;
            $data->save();


        });


        return redirect()->route('chair.view')->with('success', ' chair Info Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Chair $chair)
    {
        //
    }
}