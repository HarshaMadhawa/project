<?php

    namespace App\Http\Controllers;

    use App\Models\Alumni;
    use App\Models\User;
    use Illuminate\Http\Request;
    use Illuminate\Support\Facades\Log;

    class DashboardController extends Controller
    {
        public function getUserData(){
            $id = auth()->id();
            $user = User::find($id);
            return view('view_name', ['user' => $user]);
        }
        public function userList()
        {
            return view('userList'); // Assuming 'userList.blade.php' is the Blade view for the user list
        }
    
        public function pendingUser()
        {
            return view('pendingUser'); // Blade view for pending users
        }
    
        public function addAnnouncement()
        {
            return view('addAnnouncement'); // Blade view for adding announcement
        }
    
        public function logout()
        {
            // Logic for logout, redirecting to login, etc.
        }
    }
