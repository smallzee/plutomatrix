<?php

namespace App\Http\Controllers\guest;

use App\Http\Controllers\Controller;
use App\Http\Requests\DepositRequestForm;
use App\Mail\DepositTransactions;
use App\Models\Deposit;
use App\Models\PaymentMethod;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class DepositController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $page_title = "Make Deposit";
        return view('guest.deposit.create',compact('page_title'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(DepositRequestForm $request)
    {
        //
        $request->validated();

        $file = $request->file('file');
        $image = time().$file->getClientOriginalName();
        $file->move(public_path('assets/images'),$image);
        $reference = uniqid();

        $payment_method = PaymentMethod::find($request->payment_method);
        Deposit::create([
            'user_id'=>auth()->id(),
            'payment_method_id'=>$payment_method->id,
            'amount'=>$request->amount,
            'image'=>$image,
            'wallet_address'=>$payment_method->wallet_address,
            'reference'=>$reference,
        ]);

        Mail::to(get_settings('official_email'))->send(new DepositTransactions("Admin",$payment_method->name,$request->amount,"processing",$reference));

        return back()->with('alert_info','Your payment has been sent for processing');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
