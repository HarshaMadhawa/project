<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Stroage;
use App\Models\Notice;
use Illuminate\Support\Facades\Redirect;
use App\Models\TempNotice;

use Illuminate\Support\Facades\File;


class NoticeController extends Controller
{
    //
    function getData(Request $req){

        //return DB::select("select* from Notices");

       $req->validate([
           'title' => 'required'
        ]);

       return $req->input();
    }

    function show(Request $req){

        $data= Notice::all();
        return view('Notice/view', ['Notices'=>$data]);

    }

    function addData(Request $req){
        $notice= new TempNotice;

        $file=$req->file;
        $filename=time().'.'.$file->getClientOriginalExtension();
        $req->file->move('assets',$filename);
        $notice->File=$filename;

        $notice->id=$req->no;
        $notice->Date=$req->date;
        $notice->Title=$req->title;

        $notice->save();
        //return redirect('put');
        return redirect()->back()->with('success', 'Notice saved successfully');
    }

    // This is the function to preview before download notices
    /*public function previewNotice(Request $req, $file) {
        $filePath = public_path('assets/' . $file);

        // Check if the file exists
        if (File::exists($filePath)) {
            // Get the file's mime type
            $mimeType = File::mimeType($filePath);
    
            // Render the preview based on the file type (you'll need to implement this logic)
            // For example, for images, you might return a view with an <img> tag
            if (strpos($mimeType, 'image') !== false) {
                return view('file.preview_image')->with('filePath', $filePath);
            } elseif (strpos($mimeType, 'pdf') !== false) {
                // For PDF files, you might use a PDF viewer
                return view('file.preview_pdf')->with('filePath', $filePath);
            }
            
            // Add more conditions for other file types
    
            // If the file type doesn't have a specific preview, you might want to just download it
            return response()->download($filePath);
        }
    
        // Handle case where the file doesn't exist
        return response()->json(['error' => 'File not found'], 404);
    }
    // End of the function*/

    function download(Request $req, $file){
        return response()->download(public_path('assets/'.$file));
    }

    function preview($id){

            $data= Notice::find($id);
            
            return view('Notice/viewnotice',compact('data')); 
        // $pdf= PDF::loadview('viewnotice', ['Notices'=>$data]);
        // return $pdf->stream();  

       /* $notice = Notice::all();
        $data = Notice::find($no);

        if (!$data) {
            return redirect()->back()->with('error2', 'Document not found');
        }
        return view('viewnotice', compact('data','notice'));*/

    }

    function noticepg(){

        return view('Notice/notice');

    }

    function putnotice(){

        return view('Notice/PostNotice');

    }

    function viewpg(){

        return view('Notice/view');

    }

    function back(){

        return view('Job/notice');

    }


    function showN(Request $req){

        $data= Notice::all();
        return view('admin/deleteNotice', ['Notices'=>$data]);

    }

    function delete($id){
        $data = Notice::find($id);
        $data->delete();

        return Redirect::back();
    }    

}
