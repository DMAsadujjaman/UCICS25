<?php

namespace App\Http\Controllers;

use App\Models\Contacts;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ContactsController extends Controller
{
     /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['contact']=Contacts::first();
        //dd($data);
        return view('backend.mainpage.contact.view',$data);
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
        $data['editData']=Contacts::where('id',$id)->first();

        // dd($data['allData']->toArray());
        return view('backend.mainpage.contact.add_edit', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        DB::transaction(function () use ($request, $id) {
            $data = Contacts::where('id', $id)->first();
            $data->address = $request->address;
            $data->email = $request->email;
            $data->fb = $request->fb;
            $data->insta = $request->insta;
            $data->mobile = $request->mobile;
            $data->youtube = $request->youtube;

            $data->map = $request->map;
            $data->aboutlogo = $request->aboutlogo;
            $data->rights = $request->rights;
            $data->contact_name = $request->contact_name;
            $data->cdept = $request->cdept;
            $data->ctel = $request->ctel;
            $data->cmail = $request->cmail;

            if ($request->file('image')) {
                $file = $request->file('image');
@unlink(public_path('img/' . $data->logo));
                $filename = "/".date('YmdHi') . $file->getClientOriginalName();
                $file->move(public_path('img/'), $filename);
                $data['logo'] = $filename;
            }

            $data->save();


        });
        return redirect()->route('contact.view')->with('success', ' chair Info Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Chair $chair)
    {
        //
    }
}
