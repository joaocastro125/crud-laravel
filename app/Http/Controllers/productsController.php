<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario;

class productsController extends Controller
{
  public function create(Request $request){
     $user=new usuario();
      $user->nome='joao';
      $user->email='joaocastro_125@hotmail.com';
      $user->telefone='00000';
      $user->save();
      dd($user);


   return $user;

  }
  public function read(Request $request){

    $user=Usuario::find(1);
    return $user;
  }
  public function all(Request $request){

    $user=Usuario::all();
    return $user;
  }
  public function update(Request $request){

   $user=usuario::where("id",">",0)->update([
    "email"=>"desconhecido"
   ]);
   return $user;
  }

  public function delete(Request $request){

   $user=usuario::find(5);

   if($user){
    return $user->delete();
   }

    return 'não existe post com esse id';
    dd($user);
   }

}
