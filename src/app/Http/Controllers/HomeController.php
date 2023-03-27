<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $transaction = Transaction::where('user_id', auth()->user()->id)->orderBy('created_at', 'DESC')->limit(10)->get();
        return view('home', ['transactions' => $transaction]);
    }

    public function transfer(){
       return view('transfer');
    }

    public function transferFund(Request $request){
        $user = User::where('id', auth()->user()->id)->first();
        $currentAccountNumber = $user->account_number;
        if($request->account_number == $currentAccountNumber){
            return back()->with('error', 'You cannot transfer to self account');
        }
        if($request->amount > $user->balance){
            return back()->with('error', 'Insurficient balance');
        }

        $checkAccount = User::where('account_number', $request->account_number)->first();
        if($checkAccount){
            //debit account
            $user->balance -= $request->amount;
            $user->save();

            //credit account
            $checkAccount->balance += $request->amount;
            $checkAccount->save();

            Transaction::create(['user_id' => $user->id, 'recipient_id' => $checkAccount->id, 'amount' => $request->amount, 'type' => 'transfer', 'description' => 'Fund transfer']);
            return back()->with('success', 'Transfer Successful');
        }else{
            return back()->with('error', 'Destination account is invalid');
        }
    }

    public function deposit(){
        return view('deposit');
    }

    public function depositFund(Request $request){
        $user = User::where('id', auth()->user()->id)->first();
        $user->balance += $request->amount;
        $user->save();
        Transaction::create(['user_id' => $user->id, 'recipient_id' => $user->id, 'amount' => $request->amount, 'type' => 'deposit', 'description' => 'Fund deposit']);
        return back()->with('success', 'Deposit Successful');
    }

    public function withdraw(){
        return view('withdraw');
    }

    public function withdrawFund(Request $request){
        $user = User::where('id', auth()->user()->id)->first();
        if($request->amount > $user->balance){
            return back()->with('error', 'Insurficient balance');
        }
        $user->balance -= $request->amount;
        $user->save();
        Transaction::create(['user_id' => $user->id, 'recipient_id' => $user->id, 'amount' => $request->amount, 'type' => 'withdraw', 'description' => 'Fund withdrawal']);
        return back()->with('success', 'Withdrawal Successful');
    }

    public function viewAccount(){
        
    }
}
