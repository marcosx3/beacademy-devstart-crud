<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    function save(Request $request){
        //validate requests 
        $request->validate([
          'name'=> 'required',
          'email'=> 'required | email',
          'password'=> 'required',
        ]);
  
        $users = new User();
        $users->name = $request->name;
        $users->email = $request->email;
        $users->password = Hash::make($request->password);
        $save = $users->save();
  
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
  
        $userInfo = User::where('email','=',$request->email)->first();
        if(!$userInfo){
          return back()->with('fail',"usuario nao encontrado");
        } else {
          if(Hash::check($request->password, $userInfo->password)){
              $request->session()->put('LoggedUser', $userInfo->id);
              return redirect('/lista');
          } else {
            return back()->with('fail',"Senha Incorreta");
          }
        }
      }
}
