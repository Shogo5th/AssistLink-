<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Applicant;


class ApplicantController extends Controller
{
    public function index()
    {   
        //$organization = new Organization;
        $data = Applicant::all()->toArray(); // fetch all Applicants in table
        return $data;
        
    }

    public function add(Request $request) {

        $applicant = new Applicant;
        $applicant->IDno = $request->IDno;
        $applicant->address = $request->address;
        $applicant->householdIncome = $request->householdIncome;
        $applicant->Userusername = $request->username;
        $applicant->OrganizationsorgID = $request->orgID;
<<<<<<< HEAD
        session()->put('applicantUsername',$request->username);
        session()->put('applicantIDno',$request->IDno);
=======
<<<<<<< HEAD
        session()->put('applicantUsername',$request->username);
        session()->put('applicantIDno',$request->IDno);
=======
<<<<<<< HEAD
<<<<<<< HEAD
        session()->put('applicantUsername',$request->username);
        session()->put('applicantIDno',$request->IDno);
=======

>>>>>>> ce287262850a4b18030f7c8e24f2feb8115460eb
>>>>>>> dc931297d3b9246f93ddf24b8b901b6cb438911b
=======

>>>>>>> ce287262850a4b18030f7c8e24f2feb8115460eb
>>>>>>> dc931297d3b9246f93ddf24b8b901b6cb438911b
>>>>>>> 4fcbc3d8b747cdff8de0cba84fb4db6e5c72b74d
        $applicant->save();
    }


<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> dc931297d3b9246f93ddf24b8b901b6cb438911b
=======
>>>>>>> dc931297d3b9246f93ddf24b8b901b6cb438911b
>>>>>>> 4fcbc3d8b747cdff8de0cba84fb4db6e5c72b74d
    public function search(){

        $orgID = session()->get('orgID');
        $applicants = Applicant::Join('users', 'users.username', '=', 'applicants.Userusername')
        ->where('OrganizationsorgID',$orgID)
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> dc931297d3b9246f93ddf24b8b901b6cb438911b
=======
    public function search(Request $request){

        
        $applicants = Applicant::Join('users', 'users.username', '=', 'applicants.Userusername')
        ->where($request->OrganizationsorgID)
>>>>>>> ce287262850a4b18030f7c8e24f2feb8115460eb
<<<<<<< HEAD
>>>>>>> dc931297d3b9246f93ddf24b8b901b6cb438911b
=======
>>>>>>> dc931297d3b9246f93ddf24b8b901b6cb438911b
>>>>>>> 4fcbc3d8b747cdff8de0cba84fb4db6e5c72b74d
        ->select('IDno','fullname','address')
        ->get()->toArray();
       
        return $applicants;
      
    }

    public function IDnoValidation(Request $request) {

        // validation check if there is any same IDno in the table
        $request->validate([
            'IDno' => 'required|unique:applicants'
        ]);

        return response()->json(['success'=>'Done!']);
    }

}
