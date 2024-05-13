<?php

namespace App\Http\Controllers\guest;

use App\Http\Controllers\Controller;
use App\Http\Requests\InvestmentRequestForm;
use App\Mail\InvestmentTransaction;
use App\Models\Investments;
use App\Models\Packages;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class InvestmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $page_title = "All Investment";
        $investments = Investments::where('user_id',auth()->id())->orderBy('id','desc')->paginate(10);
        return view('guest.investment.index',compact('page_title','investments'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $page_title = "Invest";
        $packages = Packages::all();
        return view('guest.investment.create',compact('page_title','packages'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        abort(404);
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
        $page_title = "Investment Details";
        $investment = Investments::find(base64_decode($id));
        return view('guest.investment.show',compact('page_title','investment'));
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
        $package = Packages::find(base64_decode($id));
        $page_title = ucwords($package->name);
        return view('guest.investment.edit',compact('package','page_title'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(InvestmentRequestForm $request, $id)
    {
        //
        $request->validated();
        $package = Packages::find($id);

        $wallet = auth()->user()->wallet;

        $investment_method = $request->investment_method;
        $amount = $request->amount;

        if ($investment_method == 1){

            if ($amount > $wallet->deposit){
                return back()->with('alert_error','Insufficient deposit balance');
            }

            if ($amount < $package->min_deposit || $amount > $package->max_deposit){
                return back()->with("alert_error","The minimum amount and the maximum amount of the plan you selected should be between $".$package->min_deposit." - $".$package->max_deposit);
            }

            $wallet->deposit-= $amount;
            $wallet->active_investment+=$amount;
            $wallet->save();
        }

        if ($investment_method == 2){

            if ($amount > $wallet->balance){
                return back()->with('alert_error','Insufficient balance');
            }

            if ($amount < $package->min_deposit || $amount > $package->max_deposit){
                return back()->with("alert_error","The minimum amount and the maximum amount of the plan you selected should be between $".$package->min_deposit." - $".$package->max_deposit);
            }

            $wallet->balance-= $amount;
            $wallet->active_investment+=$amount;
            $wallet->save();
        }

        $reference = uniqid();

        $investment = Investments::create([
            'user_id'=>auth()->id(),
            'package_id'=>$package->id,
            'amount'=>$amount,
            'duration'=>strtotime($package->duration),
            'duration_interval'=>strtotime("next day"),
            'reference'=>$reference,
            'method'=>$investment_method
        ]);


        Mail::to(get_settings('official_email'))->send(new InvestmentTransaction("Admin",auth()->user()->email,$amount,ucwords($package->name),$reference,InvestmentMethod($investment_method)));

        return back()->with('alert_info','Your investment has been successful');
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
