<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Redirect;

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
  public function fileupload(Request $request, $article)
  {

    if ($request->hasFile('file')) {

      // Upload path
      $destinationPath = 'files/' . $article;

      // Get file extension
      $extension = $request->file('file')->getClientOriginalExtension();

      // Valid extensions
      $validextensions = array("jpeg", "jpg", "png", "pdf");

      // Check extension
      if (in_array(strtolower($extension), $validextensions)) {

        // Rename file 
        $fileName = $request->file('file')->getClientOriginalName() . time() . '.' . $extension;
        // Uploading file to given path
        $request->file('file')->move($destinationPath, $fileName);
        Redirect::back();
      }
    }
  }
  public function filedatasave(Request $request)
  {
  }

  public function upload(Request $request, $article)
  {

    if ($request->hasFile('file')) {

      // Valid extensions
      $validextensions = array("jpeg", "jpg", "png", "pdf", "doc", "docx", "pdf");

      // Get file extension
      $extension = $request->file('file')->getClientOriginalExtension();



      // Check extension
      if (in_array(strtolower($extension), $validextensions)) {

        // Upload path
        $img = array("jpeg", "jpg", "png", "gif");
        $doc = array("doc", "docx", "pdf");
        if (in_array(strtolower($extension), $img)) {
          $destinationPath = 'files/img/';
        } elseif (in_array(strtolower($extension), $doc)) {
          $destinationPath = 'files/doc/';
        }

        // Rename file 
        $fileName = $article.'.' . $extension;
        // Uploading file to given path
        $request->file('file')->move($destinationPath, $fileName);
      }
    }
  }
}
