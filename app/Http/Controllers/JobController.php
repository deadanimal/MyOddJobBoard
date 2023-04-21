<?php

namespace App\Http\Controllers;

use App\Models\Job;
use Illuminate\Http\Request;

class JobController extends Controller
{
    public function list_jobs(Request $request)
    {
        $user = $request->user();
        $profile = $user->profile;
        $profile_type = $profile->type;
        $profile_id = $profile->id;

        if ($profile_type == 'admin' || $profile_type == 'staff') {
            $jobs = Job::all();
            return view('job.staff_list', compact('jobs'));
        } else if ($profile_type == 'employee') {
            $jobs = Job::where([
                ['employer_id', '=', $profile->employer->id]
            ])->first();
            return view('job.employer_list', compact('jobs'));
        } else if ($profile_type == 'intern') {
            $jobs = Job::where([
                ['applicant_id', '=', $profile_id]
            ])->first();
            return view('job.intern_list', compact('jobs'));
        } else {

        }
    }

    public function detail_job(Request $request)
    {
        $user = $request->user();
        $profile = $user->profile;
        $profile_type = $profile->type;
        $profile_id = $profile->id;

        $job_id = (int) $request->route('job_id');
        if ($profile_type == 'admin' || $profile_type == 'staff') {
            $job = Job::find($job_id);
            return view('job.staff_detail', compact('job'));
        } else if ($profile_type == 'employee') {
            $job = Job::where([
                ['id', '=', $job_id],
                ['employer_id', '=', $profile->employer->id]
            ]);
            return view('job.employer_detail', compact('job'));
        } else if ($profile_type == 'intern') {
            $job = Job::where([
                ['id', '=', $job_id],
                ['applicant_id', '=', $profile_id]
            ])->first();
            return view('job.intern_detail', compact('job'));
        } else {

        }
    }

    public function create_job(Request $request)
    {
        $user = $request->user();
        $profile = $user->profile;
        $profile_type = $profile->type;
        $profile_id = $profile->id;

        if ($profile_type == 'intern') {
            $job = Job::create([
                'applicant_id' => $profile_id,
            ]);
        } else {

        }

        return back();
    }

    public function update_job(Request $request)
    {

        $user = $request->user();
        $profile = $user->profile;
        $profile_type = $profile->type;
        $profile_id = $profile->id;

        $job_id = (int) $request->route('job_id');

        if ($profile_type == 'admin' || $profile_type == 'staff') {
            $job = Job::find($job_id);
            $job->update([]);
        } else if ($profile_type == 'intern') {
            $job = Job::where([
                ['id', '=', $job_id],
                ['applicant_id', '=', $profile_id]
            ])->first();
            $job->update([]);
        } else {

        }    

        return back();
    }
}
