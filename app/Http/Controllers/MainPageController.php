<?php

namespace App\Http\Controllers;

use App\Models\Welcome;
use App\Models\About;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Support\Facades\DB;

class MainPageController extends Controller
{
    public function index()
    {
        return view('dashboard');
    }
    public function slider()
    {
        $data['allData']=Welcome::all();
        $data['about']=About::all();
        #dd($allData->toArray());
        return view('backend.mainpage.slider.view_imageSection',$data);
    }
    public function edit($id)
    {
        $data['editData']=Welcome::where('id',$id)->first();
        // dd("OK");
        // dd($data['allData']->toArray());
        return view('backend.mainpage.slider.add_edit_imageSection', $data);
    }
    public function delete($id)
    {
        $data=Welcome::find($id);
        // dd($data);
        $data->delete();
        return redirect()->route('slider.view');

        // dd("OK");
        // dd($data['allData']->toArray());
        // return view('backend.mainpage.slider.view_imageSection', $data);
    }
    public function add()
    {

        return view('backend.mainpage.slider.add_edit_imageSection');
    }
    

    public function store(Request $request)
    {
        DB::transaction(function () use ($request) {
            $data = new Welcome();
            $data->title = $request->title;
            $data->subTitle = $request->subtitle;
            $data->date = $request->date;
            $data->location = $request->address;

            if ($request->file('image')) {
                $file = $request->file('image');
                @unlink(public_path('img/' . $data->image));
                $filename = "/".date('YmdHi') . $file->getClientOriginalName();
                $file->move(public_path('img/'), $filename);
                $data['image'] = $filename;
            }

            $data->save();
        });

        return redirect()->route('slider.view')->with('success', ' Slider Info Updated Successfully');
    }
    public function update(Request $request, $id)
    {
        DB::transaction(function () use ($request, $id) {
            $data = Welcome::where('id', $id)->first();
            $data->title = $request->title;
            $data->subTitle = $request->subtitle;
            $data->date = $request->date;
            $data->location = $request->address;

            if ($request->file('image')) {
                $file = $request->file('image');
                @unlink(public_path('img/' . $data->image));
                $filename = "/".date('YmdHi') . $file->getClientOriginalName();
                $file->move(public_path('img/'), $filename);
                $data['image'] = $filename;
            }

            $data->save();


        });

        return redirect()->route('slider.view')->with('success', ' Slider Info Updated Successfully');
    }

}