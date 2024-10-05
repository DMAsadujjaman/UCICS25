<?php

namespace App\Http\Controllers;

use App\Models\CamReadySubs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CamReadySubsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['cam_submissionGL']=CamReadySubs::all();
        //dd($data);
        return view('backend.mainpage.cam_subs.view',$data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.mainpage.cam_subs.add_edit_camsubmissionGL');
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
    public function show(CamReadySubs $submissionGLs)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $data['editData']=CamReadySubs::where('id',$id)->first();
        return view('backend.mainpage.cam_subs.add_edit_camsubmissionGL', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        DB::transaction(function () use ($request, $id) {
            $data = CamReadySubs::where('id', $id)->first();
            $data->title = $request->title;
            $data->text_1 = $request->text_1;
            $data->text_2 = $request->text_2;
            $data->text_3 = $request->text_3;
            
            if ($request->file('image_1')) {
                $file = $request->file('image_1');
@unlink(public_path('img/' . $data->image));
                $filename = "/".date('YmdHi') . $file->getClientOriginalName();
                $file->move(public_path('img/'), $filename);
                $data['image_1'] = $filename;
            }
            if ($request->file('image_2')) {
                $file = $request->file('image_2');
@unlink(public_path('img/' . $data->image));
                $filename = "/".date('YmdHi') . $file->getClientOriginalName();
                $file->move(public_path('img/'), $filename);
                $data['image_2'] = $filename;
            }
            if ($request->file('image_3')) {
                $file = $request->file('image_3');
@unlink(public_path('img/' . $data->image));
                $filename = "/".date('YmdHi') . $file->getClientOriginalName();
                $file->move(public_path('img/'), $filename);
                $data['image_3'] = $filename;
            }

            $data->save();


        });

            return redirect()->route('cam_submission.view')->with('success', ' Speaker Info Updated Successfully');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
    }
}
