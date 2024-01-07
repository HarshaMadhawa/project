<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\TempJob;
use App\Models\job;
use Illuminate\Support\Facades\Redirect;

class TempJobController extends Controller
{
    //

    function show(){

        $data= TempJob::all();
        return view('admin/adminjob', compact('data'));

    }

    function approve($id){
        $data = TempJob::find($id);

        $Job = new job();
        
        
        $Job->Date = $data->Date;
        $Job->C_Name = $data->C_Name;
        $Job->Location = $data->Location;
        $Job->No_of_vacancies = $data->No_of_vacancies;
        $Job->Deadline = $data->Deadline;
        $Job->Content = $data->Content;
        $Job->Attachment = $data->Attachment;

        $result = $Job->save();

        $data = TempJob::find($id);
        $data->delete();

        return Redirect::back();
}


function delete($id){
    $data = TempJob::find($id);
    $data->delete();

    return Redirect::back();
}

function preview($id){

    $data= TempJob::find($id);
    return view('Job/viewjob',compact('data'));
}

}

