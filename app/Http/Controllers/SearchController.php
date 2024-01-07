<?php

//namespace App\Http\Controllers;

//use Illuminate\Http\Request;

//class PostController extends Controller
//{
    //
//}

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Lecture;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class SearchController extends Controller
{

    public function search(Request $request)
    {
        $query = $request->input('search');
        $lectureResults = User::join('lectures', 'users.UserId', '=', 'lectures.user_id')
        ->select('users.*', 'lectures.*')
       
        ->orWhere('users.FullName', 'like', '%' . $query . '%')
        ->orWhere('lectures.possition', 'like', '%' . $query . '%')
        ->get();
    

    $alumniResults = User::join('alumnis', 'users.UserId', '=', 'alumnis.user_id')
    ->select('users.*', 'alumnis.*')

    ->orWhere('users.FullName', 'like', '%' . $query . '%')
    ->orWhere('alumnis.Address', 'like', '%' . $query . '%')
    ->orWhere('alumnis.Country', 'like', '%' . $query . '%')
    ->orWhere('alumnis.Company', 'like', '%' . $query . '%')
    ->get();

    $studentResults = User::join('students', 'users.UserId', '=', 'students.user_id')
    ->select('users.*','students.*')
    
    ->orWhere('users.FullName', 'like', '%' . $query . '%')
    ->orWhere('students.Degree', 'like', '%' . $query . '%')
    ->get();
    $results = [
        'lectureResults' => $lectureResults,
        'alumniResults' => $alumniResults,
        'studentResults' => $studentResults,
    ];
   

        return view('product/searchviewresult', ['results' => $results]);
    }
    
    // PDF Generation
    public function view(Request $request)
    {
        $query = $request->input('search');
        $lectureResults = User::join('lectures', 'users.UserId', '=', 'lectures.user_id')
        ->select('users.*', 'lectures.*')
       
        ->orWhere('users.FullName', 'like', '%' . $query . '%')
        ->orWhere('lectures.possition', 'like', '%' . $query . '%')
        ->get();
    

    $alumniResults = User::join('alumnis', 'users.UserId', '=', 'alumnis.user_id')
    ->select('users.*', 'alumnis.*')

    ->orWhere('users.FullName', 'like', '%' . $query . '%')
    ->orWhere('alumnis.Address', 'like', '%' . $query . '%')
    ->orWhere('alumnis.Country', 'like', '%' . $query . '%')
    ->orWhere('alumnis.Company', 'like', '%' . $query . '%')
    ->get();

    $studentResults = User::join('students', 'users.UserId', '=', 'students.user_id')
    ->select('users.*','students.*')
    
    ->orWhere('users.FullName', 'like', '%' . $query . '%')
    ->orWhere('students.Degree', 'like', '%' . $query . '%')
    ->get();
    $results = [
        'lectureResults' => $lectureResults,
        'alumniResults' => $alumniResults,
        'studentResults' => $studentResults,
    ];

        $pdf = PDF::loadView('product/searchResult', ['results' => $results]);
        return $pdf->stream("SearchResult");

         // return $pdf->download('view.pdf');
    }




 
//   public function search(Request $request){

//     if($request->ajax()){

//         $data=Post::where('id','like','%'.$request->search.'%')
//         ->orwhere('name','like','%'.$request->search.'%')
//         ->orwhere('batch','like','%'.$request->search.'%')
//         ->orwhere('country','like','%'.$request->search.'%')
//         ->orwhere('company','like','%'.$request->search.'%')->get();


//         $output='';
//     if(count($data)>0){

//          $output ='
//             <table class="table">
//             <thead>
//             <tr>
//                 <th scope="col">Id</th>
//                 <th scope="col">Name</th>
//                 <th scope="col">Batch</th>
//                 <th scope="col">Country</th>
//                 <th scope="col">Company</th>
//             </tr>
//             </thead>
//             <tbody>';

//                 foreach($data as $row){
//                     $output .='
//                     <tr>
//                     <th scope="row">'.$row->id.'</th>
//                     <td>'.$row->name.'</td>
//                     <td>'.$row->batch.'</td>
//                     <td>'.$row->country.'</td>
//                     <td>'.$row->company.'</td>
//                     </tr>
//                     ';
//                 }



//          $output .= '
//              </tbody>
//             </table>';



//     }
//     else{

//         $output .='No results';

//     }

//     return $output;

//     }




//   }

}
