<?php

namespace App\Http\Controllers;

use App\Models\cv;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class cvcontroller extends Controller
{
    public function store(Request $request){
        $formFields = $request->validate([
            'title' => 'required',
            'file' => 'required',
            'category'=>'required',
            
        ]);

        if($request->hasFile('logo')) {
            $formFields['file'] = $request->file('file')->store('files', 'public');
        }

        $formFields['user_id'] = auth()->id();

        cv::create($formFields);

        return redirect('/cv/edit')->with('message', 'file uploaded successfully!');
    }
    public function edit(cv $cv){
        
        return view('editcv',['cv'=>$cv]);
    }
    public Function redirect(){

        $cv=auth()->user()->cv()->get();
        return view('editacc',['cv'=>$cv]);
    }
    

    public function replace(Request $request , cv $cv){
        if($cv->user_id != auth()->id()) {
            abort(403, 'Unauthorized Action');
        }
        
        $formFields = $request->validate([
            'title' => 'required',
            'file' => ['required'],
            'category' => 'required',
            
        ]);

        if($request->hasFile('file')) {
            $formFields['file'] = $request->file('file')->store('files', 'public');
        }

        $cv->update($formFields);

        return redirect('/cv/edit')->with('message', 'Listing updated successfully!');
    }

    public function destroy(cv $cv){
        if($cv->user_id != auth()->id()) {
            abort(403, 'Unauthorized Action');
        }
        
        if($cv->logo && Storage::disk('public')->exists($cv->logo)) {
            Storage::disk('public')->delete($cv->logo);
        }
        $cv->delete();
        return redirect('/cv/edit')->with('message', 'Listing deleted successfully');
    }
}
