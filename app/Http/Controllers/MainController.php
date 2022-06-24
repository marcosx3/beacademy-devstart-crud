<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Spatie\FlareClient\View;

class MainController extends Controller
{
  function login(){
        return View('auth.login');
  }

  function register(){
    return view('auth.register');
  }

    function save(Request $request){
      //validate requests 
      $request->validate([
        'name'=> 'required',
        'email'=> 'required | email',
        'password'=> 'required',
      ]);

      $admin = new Admin;
      $admin->name = $request->name;
      $admin->email = $request->email;
      $admin->password = Hash::make($request->password);
      $save = $admin->save();

      if($save){
        return back()->with('success','Usuario cadastrado.');
      } else {
        return back()->with('fail','Não foi possivel salvar no banco de dados.');
      }
    }

    function check(Request $request){
      $request->validate([
        'email'=> 'required | email',
        'password'=> 'required'
      ]);

      $userInfo = Admin::where('email','=',$request->email)->first();
      if(!$userInfo){
        return back()->with('fail',"usuario nao encontrado");
      } else {
        if(Hash::check($request->password, $userInfo->password)){
            $request->session()->put('LoggedUser', $userInfo->id);
            return redirect('/');
        } else {
          return back()->with('fail',"Senha Incorreta");
        }
      }
    }
}
