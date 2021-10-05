<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Fundraising;
use Illuminate\Support\Facades\DB;

class ContactController extends Controller
{
    public function contact(){
        $fundraising = fundraising::all()->last();
        $colect = DB::table('transactions')->where('fundraising', '=', $fundraising->id)->sum('amount');
        return view('contact.index');
    }
}
