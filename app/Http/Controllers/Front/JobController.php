<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\jobCategory;
use App\Models\job;
use Session;
use Image;


class JobController extends Controller
{
    //




    //job categories code

    public function jobCategories(){
        $jobCategories = jobCategory::get();
        return view('front.pages.job.job_categories',compact('jobCategories'));
    }

    public function AddJobCategory(){
        return view('front.pages.job.create_job_category');
    }

    public function createJobCategory(Request $req){
        // dd($req->all());

        $message= "Job Category Added Successfully!!";


        if($req->isMethod('post')){
            $data=$req->all();
            //echo "<pre>"; print_r($data); die;

            //validation

            $rules=[

                'job_category_name' => 'required|regex:/^[\pL\s\-]+$/u',

            ];
            $customMessage=[

                'job_category_name.required'=>'Job Category Name is Required!',
                'job_category_name.regex'=>'Valid Job category Name is Required!',

            ];
            $this->validate($req,$rules,$customMessage);


                $jobCategory = new jobCategory;
                $jobCategory->job_category_name = $data['job_category_name'];
                $jobCategory->description  = $data['description'];
                $jobCategory->status=1;
                $jobCategory->save();

            Session::flash('success_message',$message);
            return redirect("/add-job-category");

        }
    }


    //post a job code
    public function jobList(){
        $jobLists = Job::with('category')->get();
        // dd($jobLists->all());
        return view('front.pages.job.job_list',compact('jobLists'));
    }

    public function jobDetail($id){
        $jobDetail = Job::with('category')->find($id);
        //  dd($jobDetail->all());
        return view('front.pages.job.job_detail',compact('jobDetail'));

    }


    public function addJob(){
        $jobCategories = jobCategory::get();
        return view('front.pages.job.create_job',compact('jobCategories'));
    }



    public function createJob(Request $req){

        // dd($req->all());

        $message= "Job Post Successfully!!";


        if($req->isMethod('post')){
            $data=$req->all();
            //echo "<pre>"; print_r($data); die;

            //validation

            $rules=[
                'job_title' => 'required',
                'job_type' => 'required',
                'city' => 'required',
                'country' => 'required',
                'min_salary' => 'required',
                'max_salary' => 'required',
                'education_level' => 'required',
                'min_experience' => 'required',
                'max_experience' => 'required',
                'website' => 'required',
                'email' => 'required',
                'phone' => 'required',
                'gender' => 'required',
                'shift' => 'required',
                'description' => 'required',
            ];
            $customMessage=[

                'job_title.required'=>'Job Title Name is Required!',
                'job_type.required'=>'Job Type is Required!',
                'city.required'=>'City Name is Required!',
                'country.required'=>'Country Name is Required!',
                'min_salary.required'=>'Minimum Salary is Required!',
                'max_salary.required'=>'Maximum Salary Name is Required!',

                'education_level.required'=>'Education Level is Required!',
                'min_experiance.required'=>'Year of Experiance is Required!',
                'max_experiance.required'=>'Year of Experiance is Required!',

                'website.required'=>'Website Url is Required!',
                'email.required'=>'Email is Required!',
                'phone.required'=>'Phone Number is Required!',
                'gender.required'=>'Gender is Required!',
                'shift.required'=>'Shift Type is Required!',
                'description.required'=>'Job Description is Required!',

            ];
            $this->validate($req,$rules,$customMessage);


            // $imgName = time().'.'.$req->image->extension();
            // $req->image->move(public_path('job_file'),$imgName);

            if($req->hasFile('job_image')){
                $img_temp=$req->file('job_image');
                if($img_temp->isValid()){
                    //get image extension
                $extension=$img_temp->getClientOriginalExtension();
                //genrate new image
                $imageName=rand(111,9999).'.'.$extension;
                $imagePath=public_path('images/job_images/'.$imageName);
                //upload image
                Image::make($img_temp)->save($imagePath);
                //save job image
                $job->job_image = $imageName;
                }
            }



                $job = new job;
                $job->job_title = $data['job_title'];
                $job->job_type = $data['job_type'];
                $job->job_category_id  = $data['job_category_id'];
                $job->city = $data['city'];
                $job->country = $data['country'];
                $job->min_salary = $data['min_salary'];
                $job->max_salary = $data['max_salary'];
                $job->education_level = $data['education_level'];
                $job->min_experience = $data['min_experience'];
                $job->max_experience = $data['max_experience'];
                $job->website = $data['website'];
                $job->company_name = $data['company_name'];
                $job->address = $data['address'];
                $job->email = $data['email'];
                $job->phone = $data['phone'];
                $job->gender = $data['gender'];
                $job->shift	 = $data['shift'];
                $job->bio = $data['bio'];
                $job->description = $data['description'];
                $job->job;
                $job->status=1;
                $job->save();

             Session::flash('success_message',$message);
            return redirect("/add-job");

        }

    }

    public function updateJobCategory(){
        return view('front.pages.job.update_job_category');
    }


}
