<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\TempNotice;
use App\Models\Notice;
use Illuminate\Support\Facades\Redirect;

class TempNoticeController extends Controller
{
    //
    function show(){

        $data= TempNotice::all();
        return view('admin/adminNotice', ['Notices'=>$data]);

    }

    function approve($id){
            $data = TempNotice::find($id);

            $Notice = new Notice();
            
            $Notice->Date = $data->Date;
            $Notice->Title = $data->Title;
            $Notice->File = $data->File;

            $result = $Notice->save();

            $data = TempNotice::find($id);
            $data->delete();

            return Redirect::back();
    }




    function delete($id){
        $data = TempNotice::find($id);
        $data->delete();

        return Redirect::back();
    }

    function preview($id){

        $data= TempNotice::find($id);
        return view('Notice/viewnotice',compact('data'));
    }

}
