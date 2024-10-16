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
        $data['orgcs']=Committees::where('committee', 'Organizing Committee')->get();
        $data['advcs']=Committees::where('committee', 'Advisory Committee')->get();
        $data['teccs']=Committees::where('committee', 'Technical Committee')->get();
        $data['regcs']=Committees::where('committee', 'Registration Committee')->get();
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
       
        $validated = $request->validate([
            'name' => 'required|string',
            'university' => 'required|string',
            'student' => 'required|boolean',
            'uid' => 'nullable|string|required_if:student,1',
            'semester' => 'nullable|string|required_if:student,1',
            'photo' => 'nullable|file|image|required_if:student,1|max:2048',
            'email' => 'required|email',
            'mobile' => 'required|string',
            'address' => 'nullable|string',
            'country' => 'nullable|string',
            'paper_id' => 'required|string',
            'paper_title' => 'required|string',
            'scope' => 'required|string',
            'payment_category' => 'required|string',
        ]);
    
        // Save the data (example with Student model)
        $student = new RegForms();
        $student->name = $validated['name'];
        $student->university = $validated['university'];
        $student->student = $validated['student'];
        $student->uid = $validated['uid'];
        $student->semester = $validated['semester'];
        $student->email = $validated['email'];
        $student->mobile = $validated['mobile'];
        $student->address = $validated['address'];
        $student->country = $validated['country'];
        $student->paper_id = $validated['paper_id'];
        $student->paper_title = $validated['paper_title'];
        $student->scope = $validated['scope'];
        $student->payment_category = $validated['payment_category'];
    
        // Handle photo upload if present
        if ($request->hasFile('photo')) {
            $filePath = $request->file('photo')->store('photos', 'public');
            $student->photo = $filePath;
        }
    
        $student->save();
    
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
