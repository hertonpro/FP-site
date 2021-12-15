<?php

namespace App\Http\Controllers;

use App\Models\donation;
use App\Models\transaction;
use Illuminate\Http\Request;

class DonationController extends Controller
{
    public function index()
    {
        return view('donation.form');
    }

    public function store(Request $request)
    {
        $this->token=sha1(rand(1, 10000));
        transaction::create(['token'=> $this->token,'fundraising'=>$request->fundraising]);
        $transaction = transaction::where('token', $this->token)->first()->id;
        return redirect('donation/' . $transaction . '/edit');
    }

    public function edit($transaction)
    {
        $thisTransaction = transaction::find($transaction);
        return view('donation.form', compact('thisTransaction'));
    }
    public function update($transaction, Request $request)
    {
        $transaction = transaction::find($transaction); 
        $transaction->update([
            'amount' => $request->amount,
            'message' => $request->message,
            'donor' => $request->donor,
            'state' => 1
        ]);
        return view('donation.formconf', compact('transaction'));
    }

    public function donationSuccess($transaction)
    {
        $transaction = transaction::find($transaction);
        $transaction->update([
            'state' => 2
        ]);
        return view('donation.formdone', compact('transaction'));
    }

    public function donationCancelled($transaction)
    {
        $transaction = transaction::find($transaction);
        $transaction->update([
            'state' => 3
        ]);
        return view('donation.formdone', compact('transaction'));
    }

    public function donationNotify($transaction)
    {
        $thisTransaction = transaction::find($transaction);
        return view('donation.form', compact('thisTransaction'));
    }
}
