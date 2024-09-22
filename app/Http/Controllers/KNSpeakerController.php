<?php

namespace App\Http\Controllers;

use App\Models\KNSpeaker;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
        return view('backend.mainpage.keynote.keynote_edit_add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        DB::transaction(function () use ($request) {
            $data = new KNSpeaker();
            $data->name = $request->name;
            $data->designation = $request->designation;
            $data->about = $request->about;

            if ($request->file('image')) {
                $file = $request->file('image');
@unlink(public_path('img/' . $data->image));
                $filename = "/".date('YmdHi') . $file->getClientOriginalName();
                $file->move(public_path('img/'), $filename);
                $data['image'] = $filename;
            }

            $data->save();
        });

        return redirect()->route('kns.view')->with('success', ' Speaker Info Updated Successfully');
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
    public function edit($id)
    {
        $data['editData']=KNSpeaker::where('id',$id)->first();
        // dd("OK");
        // dd($data['allData']->toArray());
        return view('backend.mainpage.keynote.keynote_edit_add',$data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        DB::transaction(function () use ($request, $id) {
            $data = KNSpeaker::where('id', $id)->first();
            $data->name = $request->name;
            $data->designation = $request->designation;
            $data->about = $request->about;
            if ($request->file('image')) {
                $file = $request->file('image');
@unlink(public_path('img/' . $data->image));
                $filename = "/".date('YmdHi') . $file->getClientOriginalName();
                $file->move(public_path('img/'), $filename);
                $data['image'] = $filename;
            }

            $data->save();


        });
        return redirect()->route('kns.view')->with('success', ' Speaker Info Updated Successfully');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(KNSpeaker $kNSpeaker, $id)
    {
        $data=KNSpeaker::find($id);
        // dd($data);
        $data->delete();
        return redirect()->route('kns.view');
    }
}
