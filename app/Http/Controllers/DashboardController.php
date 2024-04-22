<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Feedback;

class DashboardController extends Controller
{
    public function index(){
        $feedback = Feedback::latest()->get();

        return view('dashboard', ['feedback' => $feedback]);
    }
}
