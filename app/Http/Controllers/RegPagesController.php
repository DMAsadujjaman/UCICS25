<?php

namespace App\Http\Controllers;

use App\Models\RegPages;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RegPagesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['registers']=RegPages::all();
       
        //dd($data);
        return view('backend.mainpage.regPages.view',$data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.mainpage.regPages.add_edit_regPage');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        DB::transaction(function () use ($request) {
            $data = new RegPages();
            $data->title = $request->title;
            $data->text1 = $request->text1;
            $data->table_title = $request->table_title;
            $data->cat = $request->cat;
            $data->int = $request->int;
            $data->nat = $request->nat;
            $data->note = $request->note;

            $data->text2 = $request->text2;
            $data->img1 = $request->img1;
            $data->text3 = $request->text3;
            $data->img2 = $request->img2;
            $data->text4 = $request->text4;
            $data->link = $request->link;

            if ($request->file('img1')) {
                $file = $request->file('img1');
@unlink(public_path('img/' . $data->logo));
                $filename = "/".date('YmdHi') . $file->getClientOriginalName();
                $file->move(public_path('img/'), $filename);
                $data['img1'] = $filename;
            }
            if ($request->file('img2')) {
                $file = $request->file('img2');
@unlink(public_path('img/' . $data->logo));
                $filename = "/".date('YmdHi') . $file->getClientOriginalName();
                $file->move(public_path('img/'), $filename);
                $data['img2'] = $filename;
            }

            $data->save();


        });
        return redirect()->route('register.view')->with('success', ' chair Info Updated Successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(RegPages $regPages)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(RegPages $regPages,$id)
    {
        $data['editData']=RegPages::where('id',$id)->first();
        return view('backend.mainpage.regPages.add_edit_regPage', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, RegPages $regPages, $id)
    {
        DB::transaction(function () use ($request, $id) {
            $data = RegPages::where('id', $id)->first();
            $data->title = $request->title;
            $data->text1 = $request->text1;
            $data->table_title = $request->table_title;
            $data->cat = $request->cat;
            $data->int = $request->int;
            $data->nat = $request->nat;
            $data->note = $request->note;

            $data->text2 = $request->text2;
            $data->img1 = $request->img1;
            $data->text3 = $request->text3;
            $data->img2 = $request->img2;
            $data->text4 = $request->text4;
            $data->link = $request->link;

            if ($request->file('img1')) {
                $file = $request->file('img1');
@unlink(public_path('img/' . $data->logo));
                $filename = "/".date('YmdHi') . $file->getClientOriginalName();
                $file->move(public_path('img/'), $filename);
                $data['img1'] = $filename;
            }
            if ($request->file('img2')) {
                $file = $request->file('img2');
@unlink(public_path('img/' . $data->logo));
                $filename = "/".date('YmdHi') . $file->getClientOriginalName();
                $file->move(public_path('img/'), $filename);
                $data['img2'] = $filename;
            }

            $data->save();


        });
        return redirect()->route('register.view')->with('success', ' chair Info Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(RegPages $regPages,$id)
    {
        $data=RegPages::find($id);
        // dd($data);
        $data->delete();
        return redirect()->route('register.view');
    }
}
