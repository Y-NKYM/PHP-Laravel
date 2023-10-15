<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
  //ログインページの表示
  public function index()
  {
    return view('admin.login.index');
  }
  
  protected function guard()
  {
      return Auth::guard('admins');
  }

  //ログイン処理
  public function login(Request $request)
  {
    $credentials = $request->only(['email', 'password']);

        if (Auth::guard('admins')->attempt($credentials)) {
            return redirect()->route('admin.dashboard')->with([
                'login_msg' => 'ログインしました。',
            ]);
        }

        return back()->withErrors([
            'login' => ['ログインに失敗しました'],
        ]);
  }

  //ログアウト処理
  public function logout(Request $request)
  {
    Auth::guard('admins')->logout();
    $request->session()->regenerateToken();

    //ログインページにリダイレクト
    return redirect()->route('admin.login.index')->with([
      'logout_msg' => 'ログアウトしました',
    ]);
  }
}
