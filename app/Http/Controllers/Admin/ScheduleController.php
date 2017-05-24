<?php

namespace App\Http\Controllers\Admin;

use App\Schedule;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class ScheduleController extends Controller
{
    public function index()
    {
        $schedules = Schedule::latest()->paginate();

        return view('admin.schedule.index', compact('schedules'));
    }

    public function create()
    {
        return view('admin.schedule.create');
    }

    public function store()
    {
        $this->validate(request(), [
            'title' => 'required',
            'date' => 'required',
            'organizer' => 'required',
            'organizer_website' => 'url',
            'address' => 'required',
        ]);

        $post = Schedule::create([
            'title' => ucfirst(request()->title),
            'date' => request()->date,
            'organizer' => ucfirst(request()->organizer),
            'organizer_website' => request()->organizer_website,
            'address' => request()->address
        ]);

        return redirect('/admin/schedule');
    }

    public function edit(Schedule $schedule)
    {
        return view('admin.schedule.edit', compact('schedule'));
    }

    public function update(Schedule $schedule)
    {
        $this->validate(request(), [
            'title' => 'required',
            'date' => 'required',
            'organizer' => 'required',
            'organizer_website' => 'url',
            'address' => 'required',
        ]);


        $schedule->update([
            'title' => ucfirst(request()->title),
            'date' => request()->date,
            'organizer' => ucfirst(request()->organizer),
            'organizer_website' => request()->organizer_website,
            'address' => request()->address,
        ]);

        return redirect('/admin/schedule');
    }

    public function destroy(Schedule $schedule)
    {
        $schedule->delete();

        return redirect()->route('schedule.index');
    }
}
