<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Stroage;
use App\Models\job;
use App\Models\TempJob;
use Illuminate\Support\Facades\File;

class JobController extends Controller
{
    //
    function add(Request $req){
        $data= new TempJob;

        $file=$req->file;
        $filename=time().'.'.$file->getClientOriginalExtension();
        $req->file->move ('assets',$filename);
        $data->Attachment=$filename;

        $data->id=$req->no;
        $data->Date=$req->date;
        $data->C_Name=$req->cname;
        $data->Location=$req->location;
        $data->No_of_vacancies=$req->vacancy;
        $data->Deadline=$req->deadline;
        $data->Content=$req->content;
    

        $data->save();
        return back();
    }

    function jobview(Request $req){

        $data= job::all();
        return view('Job/jobview', compact('data'));

    }

    function jobdownload(Request $req, $file){
        return response()->download(public_path('assets/'.$file));
    }

    function jobpreview($id){
            $data= job::find($id);
            return view('Job/viewjob',compact('data')); 
    }

    function jobopfirst(){

        return view('Job/job');

    }

    function postjob(){

        return view('Job/PostJob');

    }

    function viewjob(){

        return view('Job/job');

    }

    function backpg(){

        return view('Job/job');

    }

    function showJ(Request $req){

        $data= job::all();
        return view('admin/deleteJob',compact('data'));

    }

    function delete($id){
        $data = job::find($id);
        $data->delete();

        return Redirect::back();
    }    
}
