<?php

    use App\Http\Controllers\AlumniController;
    use App\Http\Controllers\userController;
    use App\Models\User;
    use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TempUserController;
use App\Http\Controllers\CustomAuthController;
use App\Http\Controllers\ForgetPasswordController;
use App\Http\Controllers\LectureController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\ChangePassowrdController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\NoticeController;
use App\Http\Controllers\JobController;
use App\Http\Controllers\TempNoticeController;
use App\Http\Controllers\TempJobController;
use App\Http\Controllers\RandomNoticeController;


// home page
Route::get('/', function () {
    return view('welcome');
});

//user oparations
// Route::get('/user', [userController::class, 'viewUser'])->name(RouteName::USER);
// Route::post('/user/admin', [userController::class, 'createAdmin'])->name(RouteName::USER_ADMIN_CREATE);
// Route::post('/user/alumini', [userController::class, 'createAlumini'])->name(RouteName::USER_ALUMINI_CREATE);
// Route::post('/user/student', [userController::class, 'createStudent'])->name(RouteName::USER_STUDENT_CREATE);
// Route::post('/user/all-students', [userController::class, 'ViewAllStudents'])->name(RouteName::USER_ALL_STUDENTS);


// Route::get('/admin/register', function () {
//     return view('user.user-registration', ["type" =>'Admin']);
// });
// Route::get('/alumini/register', function () {
//     return view('user.user-registration', ["type" => 'Alumini']);
// });
// Route::get('/student/register', function () {
//     return view('user.user-registration', ["type" => 'Student']);
// });


// Route::get('/newWelcomePage', function () {
//     return view('product.newWelcomePage');
// });
// Route::get('/AlumniRegisterForm', function () {
//     return view('product.AlumniRegisterForm');
// });
// Route::get('/register', function () {
//     return view('product.register');
// });
// Route::get('/alumniPage', function () {
//     return view('dashboard.alumniPage');
// });

Route::get('/chpwd', function () {
    return view('product.chpwd');
});

// Route::get('/login1', function () {
//     return view('product.login1');
// });
// Route::get('/lecturesRegisterForm', function () {
//     return view('product.lecturesRegisterForm');
// });
//view notice
Route::get('/addAnnouncement', function () {
    return view('admin/announcement');
});


Route::get('/LecturerEditProfile', function () {
    return view('product.lectureEditProfile');
});

Route::get('/AlumniEditPrafilePage', function () {
    return view('product.AlumniEditPrafilePage');
});
// Route::get('/StudentsRegisterForm', function () {
//     return view('product.StudentsRegisterForm');
// });

 Route::get('/staffPage', function () {
     return view('dashboards.lecturePage');
 });


// Route::get('/login1', [RegisterController::class, 'login'])->name('product.login1');
// Route::post('/check', [RegisterController::class, 'check'])->name('product.check');
// Route::get('/alumniPage', [RegisterController::class, 'index'])->name('Alumni');





// massanging oparations


// noties oparations

//Register Users to Temporary table
Route::get('/register',[TempUserController::class,'registration']);
Route::post('/register_user',[TempUserController::class,'registerTempUser']);

//Login user
Route::get('/login1',[CustomAuthController::class,'login'])->name('login1')->middleware('alreadyLoggedIn');
Route::post('/login_user',[CustomAuthController::class,'loginUser']);

//After the login directed to access the dashboard
Route::get('/dashboards',[CustomAuthController::class,'dashboard'])->middleware('isLoggedIn')->name('dashboards');

//Logut User
Route::get('/logout',[CustomAuthController::class,'logout']);


Route::get('/userList',[CustomAuthController::class,'viewUser']);
Route::get('/pendingUser',[TempUserController::class,'viewTempUser']);

//Remove User form pending list
       Route::get('remove/{id}',[TempUserController::class,'delete']);

//Accept User form pending list
Route::get('approve/{UserId}',[CustomAuthController::class,'registerUser']);

//forget password
Route::get('/forget-password', [ForgetPasswordController::class, 'forgetPassword'])->name('forget.password');
Route::post('/forget-password', [ForgetPasswordController::class, 'forgetPasswordPost'])->name('forget.password.post');
Route::get('/reset-password/{token}', [ForgetPasswordController::class, 'resetPassword'])->name('reset.password');
Route::post('/reset-password', [ForgetPasswordController::class, 'resetPasswordPost'])->name('reset.password.post');

//    Route:: post('/alumniEditProfile',[AlumniController::class, 'addAlumni'])->name('product.addAlumni');
    //update database Alumni table 
    Route::get('/alumniEditProfile',[AlumniController::class,"viewAlumniedit"] )->name("viewAlumni");
    //get database alumni table data and view
    Route:: post('/alumniEditProfile',[AlumniController::class, 'update'])->name('alumni.create');

    //update database lecture table
    Route::get('/LecturerEditProfile',[LectureController::class,"viewLectureedit"] )->name("viewLecture");
    //get databse lecrute table data and view
    Route:: post('/lectureEditProfile',[LectureController::class, 'update'])->name('lecture.create');
    //update database lecture table
    Route::get('/StudentEditProfile',[StudentController::class,"viewStudentedit"] )->name("viewStudent");
    //get databse lecrute tabstudentEditProfilele data and view
    Route:: post('/StudentEditProfile',[StudentController::class, 'update'])->name('student.create');




    //admin 
//join user and staff table and display staff page
Route::get('/lecture',[LectureController::class,'Join']);

//join user and alumni table and display alumni page
Route::get('/alumni',[AlumniController::class,'display']);

//join user and student table and display student  page
Route::get('/student',[StudentController::class,'Show']);
//route of view button in staff list
Route::get('ViewLecture/{user_id}',[LectureController::class,'viewlecture']);

//route of view button in alumni list
Route::get('viewAlumni/{user_id}',[AlumniController::class,'viewAlumni']);

//route of view button in student list
Route::get('viewStudent/{user_id}',[StudentController::class,'viewStudent']);
//route of userlist button in admin page
Route::get('/showUsers',[UsersController::class,'showUser']);
//view notice
Route::get('/addNotice', function () {
    return view('admin/announcement');
});

//view joboppotunities
Route::get('/addJobOppotunities', function () {
    return view('job');
});

//change password
Route::get('password', [ChangePassowrdController::class, 'password'])->name('password');
Route::post('password', [ChangePassowrdController::class, 'password_action'])->name('password.action');

Route::get('/searchView', function () {
    return view('product/searchView');
});

// search route

//Route::get("search",[PostController::class,'search']);
Route::get('/search', [SearchController::class, 'search'])->name('search');

//Route for Download PDF
Route::get('/view', [SearchController::class, 'view'])->name('view');

Route::get('delete/{id}',[UsersController::class,'delete']);

//notice
Route::get('notice', [NoticeController::class, 'noticepg']);
Route::get('putNotice', [NoticeController::class, 'putnotice']);
Route::post('putNotice', [NoticeController::class, 'addData']);

Route::get('list', [NoticeController::class, 'show']);

Route::get('viewpg', [NoticeController::class, 'viewpg']);
Route::get('back', [NoticeController::class, 'back']);

Route::get('/download/{File}', [NoticeController::class, 'download']);

Route::get('/previewNotice/{id}', [NoticeController::class, 'preview']);




//JOB
Route::get('first', [JobController::class, 'jobopfirst']);
Route::get('jobop', [JobController::class, 'postjob']);
Route::post('jobop', [JobController::class, 'add']);

Route::get('listview', [JobController::class, 'jobview']);

Route::get('viewjob', [JobController::class, 'viewjob']);
Route::get('backpg', [JobController::class, 'backpg']);

Route::get('/jobdownload/{Attachment}', [JobController::class, 'jobdownload']);

Route::get('/previewJob/{id}', [JobController::class, 'jobpreview']);


//
Route::get('/approveN/{id}', [TempNoticeController::class, 'approve']);
Route::get('/deleteN/{id}', [TempNoticeController::class, 'delete']);

Route::get('/adminNotice', [TempNoticeController::class, 'show']);

Route::get('/preview/{id}', [TempNoticeController::class, 'preview']);

Route::get('/approveJob/{id}', [TempJobController::class, 'approve']);
Route::get('/deleteJob/{id}', [TempJobController::class, 'delete']);

Route::get('/previewJ/{id}', [TempJobController::class, 'preview']);

Route::get('/adminJob', [TempJobController::class, 'show']);


Route::get('/allNotice', [NoticeController::class, 'showN']);
Route::get('/deleteNotice/{id}', [NoticeController::class, 'delete']);

Route::get('/allJobs', [JobController::class, 'showJ']);
Route::get('/deleteJ/{id}', [JobController::class, 'delete']);

// =======Random Notice ========

//RandomNotice Form
Route::get('RandomNoticeForm', [RandomNoticeController::class,'viewRandomNotice']);
Route::post('generateNotice', [RandomNoticeController::class,'generateNotice']);

//RandomNotice Pending Interface
Route::get('pendingNotice',[RandomNoticeController::class,'showPendingNotice']);

//Remove Pending Notice
Route::get('removeNotice/{id}',[RandomNoticeController::class,'deletePendingNotice']);

//Preview Pending Notice
Route::get('approveNotice/{id}',[RandomNoticeController::class,'createNotice']);
