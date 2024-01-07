<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\TempUser;
use Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use App\Mail\PasswordChanged;

class ChangePassowrdController extends Controller
{
    public function password()
    {
        return view('product.chpwd');
    }
    public function password_action(Request $request)
    {
        
        if (Session::has('loginId')) {
            $userId = Session::get('loginId');
            Log::info('Logged user ID: ' . $userId);

                $user = User::where('UserId', $userId)->first();

                if ($user) {
                  
                    $userPassword = $user->password; 
                    // Log::info('Logged user old pass: ' . $userPassword);
                    if($request->old_password != null || $request->new_password != null || $request->new_password_confirmation != null){
                        if (Hash::check($request->old_password, $userPassword)) {
                            // Passwords match
                            if($request->new_password != null){
                                if ($request->new_password == $request->new_password_confirmation) {
                                    $user->password = Hash::make($request->new_password);
                                    $user->save();
                                    // Send email notification
                                    Mail::to($user->email)->send(new PasswordChanged());

                                    return redirect('dashboards')->with('success', 'Password changed successfully');
                                   
                                } else {
                                    return redirect()->back()->with('error', 'Confirm password does not match');
                                }
                            }else{
                                return redirect()->back()->with('error', 'new password is empty');
                            }
                          
                        } else {
                            return redirect()->back()->with('error', 'Old password does not match');
                        }
                    }else{
                        return redirect()->back()->with('error', 'input feilds empty');
                    }
                   
                    
                   

                } else {
                    Log::error('User not found for ID: ' . $userId);
                }

                
        } else {
            Log::info('No user logged in.');
        }
       
       
    }
   
}
