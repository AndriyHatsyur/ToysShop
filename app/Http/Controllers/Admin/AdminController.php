<?php

namespace App\Http\Controllers\Admin;


use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
class AdminController extends Controller
{
    public function index(){

        return redirect()->route('orders');
        return view('pages.admin.index');
    }

    public function changePassword(Request $request)
    {
       $user = Auth::user();

        $message['error'] = 'Щось пішло не так';


       if (Hash::check($request->get('old_password'),$user->password))
       {

           if ($request->get('new_password') == $request->get('new_password_repeat'))
           {

               $user->password = Hash::make($request->get('new_password'));
               $r = $user->save();
               if ($r)
               {
                   $message['success'] = 'Пароль змінено';
                   unset($message['error']);
               }

           }
       }

       return view('pages.admin.password', ['message' => $message]);

    }

    public function changePasswordView()
    {
        return view('pages.admin.password');
    }
}
