<?php

namespace App\Http\Controllers;

use App\Models\Welcome;
use Illuminate\Http\Request;

class MainPageController extends Controller
{
     public function index()
    {
        $data['allData']=Welcome::all();
        #dd($allData->toArray());
        return view('backend.mainpage.imageSection',$data);
    }
}