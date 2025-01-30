<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Job;

class JobController extends Controller
{
    public function index()
    {
        // $jobs = Job::orderBy("id","desc")->paginate(10);
        $jobs = Job::with('employer')->latest()->paginate(6);
        return view('jobs.index', [
            'jobs' => $jobs
        ]);
    }
    public function create()
    {
        return view('jobs.create');
    }
    public function show(Job $job)
    {
        return view('jobs.show', ['job' => $job]);
    }
    public function store()
    {
        request()->validate([
            'title' => ['required', 'min:5'],
            'salary' => ['required', 'min:4'],
        ]);
    
        Job::create([
            'title' => request('title'),
            'salary' => request('salary'),
            'employer_id' => 1
        ]);
    
        return redirect('/jobs');
    }
    public function edit(Job $job)
    {
        return view('jobs.edit', ['job' => $job]);
    }
    
    public function update(Job $job)
    {
        // validate
        request()->validate([
            'title' => ['required', 'min:5'],
            'salary' => ['required', 'min:4'],
        ]);

        // authorize (On hold...)

        $job = Job::findOrFail($job->id);

        $job->update([
            'title' => request('title'),
            'salary' => request('salary')
        ]);
        return redirect('/jobs/' . $job->id);
    }
    public function destroy(Job $job)
    {
        // authorize (On hold...)

        Job::findOrFail($job->id->delete());
        return redirect('/jobs');
    }
}
