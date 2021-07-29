<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Redirect;

class FileController extends Controller
{
  public $src;
    public $tmp;
    public $filename;
    public $type;
    public $uploadfile;

    public function startupload(){
        $this -> filename = $_FILES["file"]["name"];
        $this -> tmp = $_FILES["file"]["tmp_name"];
        $this -> uploadfile = $this->src . basename($this -> name);
    }
    public function uploadfile(){
        if(move_uploaded_file($this -> tmp, $this -> uploadFile)){
            return true;
        }
    }
}
