<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Welcome;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\User as AuthUser;
use Illuminate\Support\Facades\DB;

class WelcomeController extends Controller
{
    public function index()
    {
        return view('welcome');
    }
    public function submissionGuideline()
    {
        return view('frontend.submissionguide');

    }
}