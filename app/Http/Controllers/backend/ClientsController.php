<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\TopupRequestForm;
use App\Models\Deposit;
use App\Models\Investments;
use App\Models\User;
use Illuminate\Http\Request;

class ClientsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $page_title = "All Clients";
        $users = User::orderBy('id','desc')->whereStatus(1)->where('role_type',['client'])->where('role_id',1)->paginate(10);
        return view('backend.client.index',compact('page_title','users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        abort(404);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TopupRequestForm $request)
    {
        //
        $request->validated();

        $user = User::find($request->id);
        $user->wallet->balance = $request->balance;
        $user->wallet->deposit = $request->deposit;

        $user->wallet->save();

        return back()->with('alert_info','User account has been topup successfully');
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
        $user = User::find($id);
        $page_title = ucwords($user->name)." -  Dashboard";
        $investments = Investments::where('user_id',$user->id)->orderBy('id','desc')->paginate(10);
        $deposits = Deposit::where('user_id',$user->id)->orderBy('id','desc')->paginate(10);
        return view('backend.client.show',compact('page_title','user','investments','deposits'));
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
