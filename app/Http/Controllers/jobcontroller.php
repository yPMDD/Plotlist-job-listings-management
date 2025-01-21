<?php

namespace App\Http\Controllers;

use App\Models\job;
use App\Models\User;
use App\Mail\JobApplication;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;
use Symfony\Component\CssSelector\Node\FunctionNode;

class jobcontroller extends Controller
{

    public function index()
{
    // Paginate the results
    $jobs = job::latest()->filter(request(['search']))->paginate(6);

    // Pass the results to the view
    return view('index', ['jobs' => $jobs]);

}
    public function show(job $job){
        return view('singlejob', ['job'=>$job]);
    }

    public function create() {
        return view('jobform');
    }

    public function edit(Job $job) {
        return view('/jobedit', ['job' => $job]);
    }

    public function store(Request $request){
        $formFields = $request->validate([
            'title' => 'required',
            'company' => ['required', Rule::unique('jobs', 'company')],
            'location' => 'required',
            'website' => 'required',
            'salary',
            'category'=>'required',
            'email' => ['required', 'email'],
            'description' => 'required'
        ]);

        if($request->hasFile('logo')) {
            $formFields['logo'] = $request->file('logo')->store('logos', 'public');
        }

        $formFields['user_id'] = auth()->id();

        job::create($formFields);

        return redirect('/')->with('message', 'Job posted successfully!');

    }
    public function update(Request $request,Job $job) {
        // Make sure logged in user is owner
        if($job->user_id != auth()->id()) {
            abort(403, 'Unauthorized Action');
        }
        
        $formFields = $request->validate([
            'title' => 'required',
            'company' => ['required'],
            'location' => 'required',
            'website' => 'required',
            'salary' => 'nullable' ,
            'email' => ['required', 'email'],
            'category' => 'required',
            'description' => 'required'
        ]);

        if($request->hasFile('logo')) {
            $formFields['logo'] = $request->file('logo')->store('logos', 'public');
        }

        $job->update($formFields);

        return redirect('/job/manage')->with('message', 'Listing updated successfully!');
    }

    public Function redirect(){
        return view('managejob',['job'=>auth()->user()->job()->get()]);
    }

    public function destroy(job $job) {
        // Make sure logged in user is owner
        if($job->user_id != auth()->id()) {
            abort(403, 'Unauthorized Action');
        }
        
        if($job->logo && Storage::disk('public')->exists($job->logo)) {
            Storage::disk('public')->delete($job->logo);
        }
        $job->delete();
        return redirect('/')->with('message', 'Listing deleted successfully');
    }

    public function apply(job $job){
        $user = auth()->user();

        // Ensure the user has a resume
        if (!$user->cv) {
            return redirect()->back()->with('error', 'You need to upload a resume to apply for this job.');
        }

        // Send the resume to the job's email
        Mail::to($job->email)->send(new JobApplication($user, $job));

        return redirect()->back()->with('success', 'Your resume has been sent successfully!');
    }
    public function email(){
        return view('emails.email');
    }
}


