<?php

namespace App\Http\Controllers;

use App\Models\donation;
use Illuminate\Http\Request;

class DonationController extends Controller
{
    public function donationForm( Request $info ){
        $info = [];
        return view( 'donation.form', $info );
    }

    public function donationSuccess( Request $request ){
        dump( "Donation Success" );
        dd( $request->all() );
    }

    public function donationCancelled( Request $request ){
        dump( "Donation Cancelled" );
        dd( $request->all() );
    }

    public function donationNotify( Request $request ){
        dump( "Donation Notify" );
        dd( $request->all() );
    }
}
