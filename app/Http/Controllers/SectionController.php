<?php

namespace App\Http\Controllers;

use App\Section;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SectionController extends Controller
{
    public function index()
    {
        $userId = Auth::id();
        $user = User::findOrFail($userId);
        $section = Section::with('project')->get();

        return view('section.section', [
            'user' => $user,
            'section' => $section,
        ]);
    }

    public function create($id)
    {
        $userId = Auth::id();
        $user = User::findOrFail($userId);
        $section = Section::all();
        $holiday = $user->holidays;
        return view('section.create', [
            'user' => $user,
            'section' => $section,
            'holiday' => $holiday
        ]);
}

    public function store(Request $request)
    {
        $request->request->add(['id' => 3]);
        Section::create($request->all());

        return redirect('dashboard/reservations')->with('success', 'Reservation created!');
    }
}
