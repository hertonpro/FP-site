<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FilesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
      /*
  File upload
  */ 
  public function fileupload(Request $request, $article){

    if($request->hasFile('file')) {

      // Upload path
      $destinationPath = 'files/'.$article;

      // Get file extension
      $extension = $request->file('file')->getClientOriginalExtension();

      // Valid extensions
      $validextensions = array("jpeg","jpg","png","pdf");

      // Check extension
      if(in_array(strtolower($extension), $validextensions)){

        // Rename file 
        $fileName = $request->file('file')->getClientOriginalName().time() .'.' . $extension;
        // Uploading file to given path
        $request->file('file')->move($destinationPath, $fileName); 

      }

    }
 }
 public function filedatasave(Request $request){

 }
}
