<?php

namespace App\Http\Controllers;

use App\Models\Investments;
use Illuminate\Http\Request;

class HookController extends Controller
{
    //

    public function hooks()
    {
        $investment = Investments::where('status','active')->inRandomOrder()->first();

        if ($investment){
            $duration = $investment->duration;
            $duration_interval = $investment->duration_interval;
            $amount = $investment->amount;
            $interest = $investment->package->interest;
            $interest_amount = $amount / 100 * $interest;


            if (time() >= $duration_interval){

                $investment->duration_interval = strtotime("next day");
                $investment->profit+= $interest_amount;

                $investment->user->wallet->profit+= $interest_amount;

                $investment->user->wallet->save();
                $investment->save();

            }

            if (time() >= $duration){
                $profit = $investment->profit;

                $investment->user->wallet->balance+= $amount + $profit;
                $investment->user->wallet->active_investment-= $amount;
                $investment->user->wallet->profit-= $profit;
                $investment->status = "in-active";

                $investment->save();
                $investment->user->wallet->save();
            }


        }
    }
}
