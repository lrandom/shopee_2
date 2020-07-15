<?php  
 namespace App\Http\Controllers\Admin;
 use Illuminate\Http\Request;
  interface IAdminController{
      function list(Request $request);
      function add(Request $request);
      function edit(Request $request);
      function delete(Request $request);
  }
?>