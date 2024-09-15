<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Welcome;
use App\Models\About;
use App\Models\Scopes;
use App\Models\call_fp;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\User as AuthUser;
use Illuminate\Support\Facades\DB;

class WelcomeController extends Controller
{
    public function index()
    {
        $data['sliders']=Welcome::all();
        $data['scopes']=Scopes::all();
        $data['abouts']=About::first();
        $data['call_fps']=call_fp::first();
        return view('welcome',$data);
    }
    public function submissionGuideline()
    {
        return view('frontend.submissionguide');

    }
}