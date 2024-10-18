<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Welcome;
use App\Models\About;
use App\Models\Scopes;
use App\Models\call_fp;
use App\Models\Chair;
use App\Models\KNSpeaker;
use App\Models\Committees;
use App\Models\SubmissionGLs;
use App\Models\CamReadySubs;
use App\Models\RegPages;
use App\Models\Contacts;
use App\Models\Faqs;
use App\Models\RegForms;
use App\Models\Sponsors;
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
        $data['sponsors']=Sponsors::all();
        $data['contacts']=Contacts::first();
        $data['submissionGL']=SubmissionGLs::where('page','SPA')->first();
        return view('welcome',$data);
    }
    public function submissionGuideline()
    {
        $data['contacts']=Contacts::first();
        $data['submissionGL']=SubmissionGLs::where('page','SGL')->first();
        return view('frontend.single_page.submissionguide', $data);

    }
    public function camsubmissionGuideline()
    {
        $data['contacts']=Contacts::first();
        $data['camsubmissionGL']=CamReadySubs::first();
        return view('frontend.single_page.camsubmissionguide', $data);

    }
    public function faq()
    {
        $data['contacts']=Contacts::first();
        $data['faqs']=Faqs::all();
        return view('frontend.single_page.faq',$data);

    }
    public function committee()
    {
        $data['contacts']=Contacts::first();
        $data['scopes']=Scopes::all();
        $data['orgcs']=Committees::where('committee', 'Organizing Committee')->orderBy('priority', 'asc')->get();
        $data['advcs']=Committees::where('committee', 'Advisory Committee')->orderBy('priority', 'asc')->get();
        $data['teccs']=Committees::where('committee', 'Technical Committee')->orderBy('priority', 'asc')->get();
        $data['publs']=Committees::where('committee', 'Publication Committee')->orderBy('priority', 'asc')->get();
        $data['regcs']=Committees::where('committee', 'Registration Committee')->orderBy('priority', 'asc')->get();
        return view('frontend.single_page.committee',$data);

    }
    public function registration()
    {
        $data['contacts']=Contacts::first();
        $data['scopes']=Scopes::all();
        $data['regs']=RegPages::all();
        return view('frontend.single_page.registration',$data);

    }
    public function reg_form()
    {
        $data['contacts']=Contacts::first();
        $data['scopes']=Scopes::all();
        $data['regs']=RegForms::all();
        $data['regps']=RegPages::all();
        $data['regs']=RegForms::all();
        return view('frontend.single_page.reg_form',$data);

    }
    public function reg_store(Request $request)
    {
        
        $data['contacts']=Contacts::first();

        
        // Save the data (example with Student model)
        $data = new RegForms();
        $data->name = $request->name;
        $data->university = $request->university;
        $data->student = $request->student;
        $data->uid = $request->uid;
        $data->semester = $request->semester;
        $data->email1 = $request->email;
        $data->phone1 = $request->mobile;
        $data->email2 = $request->email1;
        $data->phone2 = $request->mobile1;
        $data->address = $request->address;
        $data->country = $request->nationality;
        $data->paper_id = $request->paper_id;
        $data->paper_title = $request->paper_title;
        $data->scope = $request->scope;
        $data->payment_category = $request->pac;

        // Handle photo upload if present
        if ($request->file('image')) {
            $file = $request->file('image');
@unlink(public_path('img/' . $data->image));
            $filename = "/".date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('img/'), $filename);
            $data['image'] = $filename;
        }

        $data->save();

        return response()->json(['success' => true, 'message' => 'Data saved successfully!']);

        // return view('frontend.single_page.reg_form',$data);

    }
    public function swaward()
    {
        $data['contacts']=Contacts::first();
        $data['submissionGL']=SubmissionGLs::where('page','SPA')->first();
        return view('frontend.single_page.award',$data);

    }
    public function contact()
    {
        $data['contacts']=Contacts::first();
        $data['submissionGL']=SubmissionGLs::where('page','SGL')->first();
        return view('frontend.single_page.contact',$data);

    }
}