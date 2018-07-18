<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class SessionsController extends Controller
{
    //

    public function create()
    {
        return view('sessions.create');
    }

    public function store(Request $request)
    {
        $credentials = $this->validate($request, [
            'email' => 'required|email|max:255',
            'password' => 'required'
        ]);

        if (Auth::attempt($credentials,$request->has('remember'))) {
            session()->flash('success', '登录成功');

            return redirect()->route('users.show', [Auth::user()]);
        }else{

            session()->flash('danger', "你的注册账号和密码有不对的地方，请确认后重新输入");
            return redirect()->back();
        }

        return $credentials;
    }


    public function destroy()
    {


        Auth::logout();
        session()->flash('success','退出成功！');
        return redirect('login');
    }
}
