<?php

namespace App\Http\Controllers;

use App\Section;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $userId = Auth::id();
        $user = User::findOrFail($userId);
        $section = Section::all();
        $holiday = $user->holidays;

        return view('app', [
            'user' => $user,
            'section' => $section,
            'holiday' => $holiday
        ]);
    }
}
