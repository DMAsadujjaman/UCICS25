<?php

namespace App\Http\Controllers;

use App\Models\Downloads;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DownloadsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['downloads']=Downloads::all();
        return view('backend.mainpage.download.view',$data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.mainpage.download.add_edit');
    }
    public function down_cf()
    {
        $data['editData']=Downloads::where('menu','Conference Flyers')->first();
        // dd(asset('public/file/').$data['editData']->file);
        return response()->download(public_path('file/' . $data['editData']->file));
    }
    public function down_wt()
    {
        $data['editData']=Downloads::where('menu','Word Template')->first();
        // dd(asset('public/file/').$data['editData']->file);
        return response()->download(public_path('file/' . $data['editData']->file));
    }
    public function down_latx()
    {
        $data['editData']=Downloads::where('menu','LaTeX Template')->first();
        // dd(asset('public/file/').$data['editData']->file);
        return response()->download(public_path('file/' . $data['editData']->file));
    }
    public function down_cp()
    {
        $data['editData']=Downloads::where('menu','Conference Poster')->first();
        // dd(asset('public/file/').$data['editData']->file);
        return response()->download(public_path('file/' . $data['editData']->file));
    }
    public function down_bl()
    {
        $data['editData']=Downloads::where('menu','Program Booklet')->first();
        // dd(asset('public/file/').$data['editData']->file);
        return response()->download(public_path('file/' . $data['editData']->file));
    }
    public function down_dtp()
    {
        $data['editData']=Downloads::where('menu','Developing the Presentation')->first();
        // dd(asset('public/file/').$data['editData']->file);
        return response()->download(public_path('file/' . $data['editData']->file));
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        DB::transaction(function () use ($request) {
            $data =new Downloads();

            $data->menu = $request->menu;

            if ($request->file('file')) {
                $file = $request->file('file');
@unlink(public_path('file/' . $data->file));
                $filename = "/".date('YmdHi') . $file->getClientOriginalName();
                $file->move(public_path('file/'), $filename);
                $data['file'] = $filename;
            }

            $data->save();


        });


        return redirect()->route('download.view')->with('success', ' chair Info Updated Successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Downloads $downloads)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Downloads $downloads, $id)
    {
        $data['editData']=Downloads::where('id',$id)->first();
        return view('backend.mainpage.download.add_edit', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,$id)
    {
        DB::transaction(function () use ($request, $id) {
            $data = Downloads::where('id', $id)->first();

            $data->menu = $request->menu;

            if ($request->file('file')) {
                $file = $request->file('file');
@unlink(public_path('file/' . $data->file));
                $filename = "/".date('YmdHi') . $file->getClientOriginalName();
                $file->move(public_path('file/'), $filename);
                $data['file'] = $filename;
            }

            $data->save();


        });


        return redirect()->route('download.view')->with('success', ' chair Info Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Downloads $downloads)
    {
        //
    }
}
