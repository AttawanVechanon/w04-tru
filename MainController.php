<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Activity;
use App\Models\Organization;
use App\Models\Community;
use App\Models\Title;
use App\Models\Staff;

class MainController extends Controller
{
    public function activities() {
        $data = Activity::all();
        return view('activities', compact('data'));
    }

    public function organizations() {
        $data = Organization::all();
        return view('organizations', compact('data'));
    }

    public function communities() {
        $data = Community::all();
        return view('communities', compact('data'));
    }

    public function titles() {
        $data = Title::all();
        return view('titles', compact('data'));
    }

    public function staff() {
        $data = Staff::all();
        return view('staff', compact('data'));
    }
}