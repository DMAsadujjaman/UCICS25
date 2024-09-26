<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Welcome;
use App\Models\About;
use App\Models\Scopes;
use App\Models\call_fp;
use App\Models\Chair;
use App\Models\KNSpeaker;
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
        $data['chair']=Chair::first();
        $data['kns']=KNSpeaker::all();
        return view('welcome',$data);
    }
    public function submissionGuideline()
    {
        return view('frontend.single_page.submissionguide');

    }
    public function faq()
    {
        return view('frontend.single_page.faq');

    }
    public function committee()
    {
        $data['scopes']=Scopes::all();
        return view('frontend.single_page.committee',$data);

    }
}