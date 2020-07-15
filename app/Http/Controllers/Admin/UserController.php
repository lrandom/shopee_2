<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller; //import
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\User;

class UserController extends Controller implements IAdminController
{
   /*Lấy ra danh sách user người dùng*/
   function list(Request $request){
      $list = User::paginate(10);//10 bản ghi một page
      return view('admin.users.list',['list'=>$list]);
    }

   function delete(Request $request){

   }

   function edit(Request $request){

   }

   function add(Request $request){
      if($request->isMethod('post')){
         //echo 'lala';
         //tạo user
         /*User::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=>Hash::make($request->password)
         ]);*/

         $user = new User();
         $user->name = $request->name;
         $user->email = $request->email;
         $user->password = Hash::make($request->password);
         $user->save();
         return redirect()->back()->with('message',__('main.add_success'));
      }
      return view('admin.users.add');
   }
}
