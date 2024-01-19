<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Applicant;
class ApplicantController extends Controller
{
    public function index(){
        $applicants = Applicant::all();
        return view('/dashboard',['applicants' => $applicants]);
    }

    public function create(Request $request){
        $validate_data = $request->validate([
            'name' => 'string|required',
            'email' => 'email|required',
            'intro' => 'string|required',
            'age' => 'numeric|required',
            'city' => 'string|required',
            'phone_number' => 'string|required',
            'field_of_study' => 'string|required',
            'degree' => 'string|required',
            'years_of_experience' => 'numeric|required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif',
            'resume' => 'required|mimes:pdf'
        ]);

        $applicant = new Applicant;
        $applicant->name = $validate_data['name'];
        $applicant->email = $validate_data['email'];
        $applicant->phone_number = $validate_data['phone_number'];
        $applicant->intro = $validate_data['intro'];
        $applicant->city = $validate_data['city'];
        $applicant->age = $validate_data['age'];
        $applicant->field_of_study = $validate_data['field_of_study'];
        $applicant->degree = $validate_data['degree'];
        $applicant->years_of_experience = $validate_data['years_of_experience'];

        if ($request->hasFile('image')){
            $image = $request->file('image');
            $imageName =  $image->getClientOriginalName();
            $path = $image->storeAs('public/images', $imageName);
            $relativePath = str_replace('public/', '', $path);
            $applicant->image = $relativePath;
        }
        
        if ($request->hasFile('resume')){
            $resume = $request->file('resume');
            $resumeName =  $resume->getClientOriginalName();
            $path = $resume->storeAs('public/resumes', $resumeName);
            $relativePath = str_replace('public/', '', $path);
            $applicant->resume = $relativePath;
        }

        $applicant->save();
        
        return redirect('/dashboard');
   
    }
}
