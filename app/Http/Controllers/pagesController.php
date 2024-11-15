<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Enrollment;
use App\Models\PriceHistory;
use App\Models\ProgressTracking;
use App\Models\User;
use Illuminate\Http\Request;

class pagesController extends Controller
{
    public function index() {
        $courses = Course::all();
        return view('welcome');
    }
    public function users() {
        $users = User::all();
        return response()->json($users);
    }
    
    public function courses() {
        $courses = Course::all();
        return response()->json($courses);
    }
    
    public function enrollment() {
        $enrollment = Enrollment::all();
        return response()->json($enrollment);
    }
    public function priceHistory() {
        $priceHistory = PriceHistory::all();
        return response()->json($priceHistory);
    }
    public function progressTracking() {
        $progressTracking = ProgressTracking::all();
        return response()->json($progressTracking);
    }
}
