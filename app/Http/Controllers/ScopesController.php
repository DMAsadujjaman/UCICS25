<?php

namespace App\Http\Controllers;

use App\Models\Scopes;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ScopesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['scopes']=Scopes::all();
        return view('backend.mainpage.scope.view_scopes',$data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.mainpage.scope.add_edit_scopes');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        DB::transaction(function () use ($request) {
            $data = new scopes();
            $data->title = $request->title;
            $data->col_1 = $request->col_1;
            $data->col_2 = $request->col_2;
            $data->col_3 = $request->col_3;
            $data->save();
          
        });

        return redirect()->route('scopes.view')->with('success', ' Slider Info Updated Successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(scopes $scopes)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $data['editData']=Scopes::where('id',$id)->first();
        return view('backend.mainpage.scope.add_edit_scopes', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        DB::transaction(function () use ($request, $id) {
            $data = Scopes::where('id', $id)->first();
            $data->title = $request->title;
            $data->col_1 = $request->col_1;
            $data->col_2 = $request->col_2;
            $data->col_3 = $request->col_3;
            $data->save();
        });

        return redirect()->route('scopes.view')->with('success', ' Scopes Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $data=Scopes::find($id);
        // dd($data);
        $data->delete();
        return redirect()->route('scopes.view');
    }
}
