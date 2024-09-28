<?php

namespace App\Http\Controllers;

use App\Models\Faqs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FaqsController extends Controller
{
    public function index()
    {
        $data['faqs']=Faqs::all();
        //dd($data);
        return view('backend.mainpage.faq.view',$data);
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.mainpage.faq.add_edit_faq');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        DB::transaction(function () use ($request) {
            $data = new Faqs();
            $data->title = $request->title;
            $data->qus = $request->qus;
            $data->ans = $request->ans;

            if ($request->file('image')) {
                $file = $request->file('image');
@unlink(public_path('img/' . $data->image));
                $filename = "/".date('YmdHi') . $file->getClientOriginalName();
                $file->move(public_path('img/'), $filename);
                $data['image'] = $filename;
            }

            $data->save();
        });

        return redirect()->route('faq.view')->with('success', ' Speaker Info Updated Successfully');
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
        $data['editData']=Faqs::where('id',$id)->first();
        return view('backend.mainpage.faq.add_edit_faq', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        DB::transaction(function () use ($request, $id) {
            $data = Faqs::where('id', $id)->first();
            $data->title = $request->title;
            $data->qus = $request->qus;
            $data->ans = $request->ans;
            
            if ($request->file('image')) {
                $file = $request->file('image');
@unlink(public_path('img/' . $data->image));
                $filename = "/".date('YmdHi') . $file->getClientOriginalName();
                $file->move(public_path('img/'), $filename);
                $data['image'] = $filename;
            }
           

            $data->save();


        });
        return redirect()->route('faq.view')->with('success', ' Speaker Info Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $data=Faqs::find($id);
        
        $data->delete();
        return redirect()->route('faq.view');
    }
}
