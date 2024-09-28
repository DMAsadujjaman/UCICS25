<?php

namespace App\Http\Controllers;

use App\Models\Sponsors;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class SponsorsController extends Controller
{
    public function index()
    {
        $data['sponsors']=Sponsors::all();
        //dd($data);
        return view('backend.mainpage.sponsor.view',$data);
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.mainpage.sponsor.add_edit_sponsor');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        DB::transaction(function () use ($request) {
            $data = new sponsors();
            $data->title = $request->title;
            $data->subtitle = $request->subtitle;
            if ($request->file('image')) {
                $file = $request->file('image');
@unlink(public_path('img/' . $data->image));
                $filename = "/".date('YmdHi') . $file->getClientOriginalName();
                $file->move(public_path('img/'), $filename);
                $data['image'] = $filename;
            }

            $data->save();
        });

        return redirect()->route('sponsor.view')->with('success', ' Speaker Info Updated Successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $data['editData']=sponsors::where('id',$id)->first();
        return view('backend.mainpage.sponsor.add_edit_sponsor', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        DB::transaction(function () use ($request, $id) {
            $data = sponsors::where('id', $id)->first();
            $data->title = $request->title;
            $data->subtitle = $request->subtitle;

            if ($request->file('image')) {
                $file = $request->file('image');
@unlink(public_path('img/' . $data->image));
                $filename = "/".date('YmdHi') . $file->getClientOriginalName();
                $file->move(public_path('img/'), $filename);
                $data['image'] = $filename;
            }
           

            $data->save();


        });
        return redirect()->route('sponsor.view')->with('success', ' Speaker Info Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $data=sponsors::find($id);
        
        $data->delete();
        return redirect()->route('sponsor.view');
    }
}
