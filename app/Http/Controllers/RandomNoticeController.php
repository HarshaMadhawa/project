<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RandomNotice;
use Barryvdh\DomPDF\Facade\Pdf;

class RandomNoticeController extends Controller
{
    //
    public function viewRandomNotice() {
        return view('RandomNoticeForm');
    }

    public function generateNotice(Request $req) {
        $req -> validate ([
            'topic' => 'required',
            'content' => 'required',
            'name' => 'required',
            'designation' => 'required'
        ]);

        $notice = new RandomNotice();
        
        $notice->Date = $req->date;
        $notice->Topic = $req->topic;
        $notice->Content = $req->content;
        $notice->Name = $req->name;
        $notice->Designation = $req->designation;

        $result = $notice->save();
        
        if($result) {
            return back()->with('success', 'Notice generation successfull!');
        } else {
            return back()->with('fail', 'Somthing worng!, Regenerate your notice.');
        }
    }

    public function showPendingNotice () {
        $data = RandomNotice::all();
        return view('pendingNotice', compact('data'));
    }

    public function createNotice ($id) {
        $data = RandomNotice::where('id',$id)->first();
        $pdf = PDF::loadview('NoticePDF',Compact('data'));
        $fileName = ($data['Date']."_".$data['Topic'] ?? 'default') . '.pdf';
        return $pdf->Stream($fileName);
    }

    public function deletePendingNotice ($id) {
        $data = RandomNotice::find($id);
        $result = $data->delete();
        if($result) {
            return back()->with('success', 'Notice Removed Successfull!');
        }
    }
}
