<?php

namespace App\Http\Controllers\guest;

use App\Http\Controllers\Controller;
use App\Http\Requests\InvestmentRequestForm;
use App\Models\Packages;
use Illuminate\Http\Request;

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
        $package = Packages::find(base64_decode($id));
        $page_title = ucwords($package->name);
        return view('guest.investment.show',compact('package','page_title'));
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
        abort(404);
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

        $investment_method = $request->investment_method;
        $amount = $request->amount;

        if ($investment_method == 1){

            if ($amount < auth()->user()->wallet->deposit){
                return back()->with('alert_error','Insufficient deposit');
            }

            if ($amount < $package->min_deposit || $amount > $package->max_deposit){
                return back()->with("alert_error","The minimum amount and the maximum amount of the plan you selected should be between $".$package->min_deposit+" - $".$package->max_deposit);
            }
        }

        if ($investment_method == 2){

            if ($amount < auth()->user()->wallet->balance){
                return back()->with('alert_error','Insufficient balance');
            }

            if ($amount < $package->min_deposit || $amount > $package->max_deposit){
                return back()->with("alert_error","The minimum amount and the maximum amount of the plan you selected should be between $".$package->min_deposit+" - $".$package->max_deposit);
            }

        }

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
