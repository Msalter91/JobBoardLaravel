<?php

namespace App\Http\Controllers;

use App\Models\Job;
use Illuminate\Http\Request;

class JobController extends Controller
{
    public function index(): \Illuminate\Contracts\View\View|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\Foundation\Application
    {
        //When function will only run this filtering function if the request 'search' param is not null
        //orWhere is basically a || in this case
        $jobs = Job::query();
        $jobs->when(request('search'), function ($query) {
            //Wrapping in a query function works like brackets in the eventual sql statement
            $query->where(function ($query) {
                $query->where('title', 'like', '%'. request('search') .'%')
                    ->orWhere('description', 'like', '%'. request('search') .'%');
            });
        })->when(request('min_salary'), function ($query) {
            $query->where('salary', '>=', request('min_salary'));
        })
                ->when(request('max_salary'), function ($query) {
                    $query->where('salary', '<=', request('max_salary'));
        })
            ->when(request('experience'), function ($query) {
                $query->where('experience', request('experience'));
            })
            ->when(request('category'), function ($query) {
                $query->where('category', request('category'));
            });

        // Called when the job index route is hit - uses the Job model to fetch all the Jobs from the DB
        return view('job.index', ['jobs' => $jobs->get()]);
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    // This is an example of route model binding
    public function show(Job $job)
    {
        // compact passes the job variable as an array with the name job nice and simple
        return view('job.show', compact('job'));
    }

    public function edit(string $id)
    {
        //
    }

    public function update(Request $request, string $id)
    {
        //
    }

    public function destroy(string $id)
    {
        //
    }
}
