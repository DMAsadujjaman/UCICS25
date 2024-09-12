<?php

namespace App\Http\Controllers;

use App\Models\Welcome;
use App\Models\About;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['allData']=Welcome::all();

        $data['about']=About::first();
        #dd($allData->toArray());
        return view('backend.mainpage.about.view',$data);
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
    public function show(about $about)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $data['editData']=About::where('id',$id)->first();
        // dd("OK");
        // dd($data['allData']->toArray());
        return view('backend.mainpage.about.about_edit', $data);
        
    }
    
    public function editdate($id)
    {
        $data['editData']=About::where('id',$id)->first();
        // dd("OK");
        // dd($data['allData']->toArray());
        return view('backend.mainpage.about.date_edit', $data);
        
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,$id)
    {
        DB::transaction(function () use ($request, $id) {
            $data = About::where('id', $id)->first();
            $data->title = $request->title;
            $data->about = $request->about;
            $data->save();


        });

        return redirect()->route('about.view')->with('success', ' About Info Updated Successfully');
    }
    public function updatedate(Request $request,$id)
    {
        DB::transaction(function () use ($request, $id) {
            $data = About::where('id', $id)->first();
            $data->submission_date=$request->submission_date;
            $data->acceptance_date=$request->acceptance_date;
            $data->cam_submission_date=$request->cam_submission_date;
            $data->registration_date=$request->registration_date;
            $data->conference_date=$request->conference_date;

            $data->submission_date_final=$request->submission_date_final;
            $data->acceptance_date_final=$request->acceptance_date_final;
            $data->cam_submission_date_final=$request->cam_submission_date_final;
            $data->registration_date_final=$request->registration_date_final;
            $data->conference_date_final=$request->conference_date_final;

            $data->save();


        });

        return redirect()->route('about.view')->with('success', ' Slider Info Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(about $about)
    {
        //
    }
}
