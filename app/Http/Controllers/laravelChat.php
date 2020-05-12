<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class laravelChat extends Controller
{
    //
    public function saveUser(Request $request)
    {
        $email = $request->input('email');
        $password = $request->input('password');
        
        $data = DB::table('users')->where('email',$email)->first();

        if(!empty($data))
        {
            $status = $data->status;
            $userPassword = $data->password;
            $name = $data->name;
            // echo json_encode($name); exit;
            if (Hash::check($password, $userPassword)) 
            {
                // The passwords match...
                if($status == 0)
                {
                    $sessionuser = $request->session()->put('email',$email);
                    return redirect('/chatWithAdmin');
                }
                else
                {
                    $sessionadmin = $request->session()->put('email',$email);
                    return redirect('/chat');
                }
            }
            else
            {
                $messages = 'Looks like you have entered an invalid password. Please try again.';
                return back()->withErrors($messages)->withInput();
            }
        }
        else
        {
            $messages = 'Looks like you have entered an invalid email address. Please try again.';
            return back()->withErrors($messages)->withInput();
        }
    }


    public function getUserDetails()
    {
        $users = DB::table('users')->where('status',0)->get();
        echo json_encode($users);
    }

    public function getAdminDetails()
    {
        $users = DB::table('users')->where('status',1)->get();
        echo json_encode($users);
    }
    
    public function userDetails(Request $request,$id)
    {
        // echo "hi";
        $users = DB::table('users')->where('id',$id)->first();
        $name = $users->name;
        return ($name);
    }
}
