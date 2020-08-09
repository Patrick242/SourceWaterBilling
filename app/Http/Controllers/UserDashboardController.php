<?php

namespace App\Http\Controllers;
use App\MeterReadings;
use Illuminate\Http\Request;

use Auth;
use App\User;

class UserDashboardController extends Controller
{
    public function createMeterReading(Request $request){
        $user = Auth::user();
        $this->validate($request, [
            'name' => 'required',
            'cardnumber' => 'required|numeric',
            'currentmeterreading' => 'required'
        ]);

        $meter = new MeterReadings([
            'name' => $request->input('name'),
            'cardnumber' => $request->input('cardnumber'),
            'currentmeterreadings' => $request->input('currentmeterreading')
        ]);

        $user->bills()->save($meter);
        return redirect()->route('bill.index')->with('info', 'Meter Readings successfully submitted check your billing information below');
    }

    public function meterReadingIndex(){
        return view('User-Dashboard.MeterReading.index');
    }

    public function UserBillIndex(){
        $userbills = MeterReadings::where('name', Auth::user()->name)->paginate(5);
        $currentdate = MeterReadings::orderBy('created_at','DESC')->where('name', Auth::user()->name)->first();
        $previousBill = MeterReadings::orderBy('created_at','DESC')->where('name', Auth::user()->name)->get();
        $previousBilldate = 0;
        for($i = 1; $i <= 2; $i++){
            $previousBilldate = $previousBill[$i];
        };
        $finddate = MeterReadings::where('created_at', $previousBilldate)->where('name', Auth::user()->name)->first();
        $consumption =  ($currentdate->currentmeterreadings) - ($finddate->currentmeterreadings);
        return view('User-Dashboard.Billing.index', ['userbills' => $userbills, 'currentdatebill' => $currentdate->currentmeterreadings, 'previousdatebill' => $finddate->currentmeterreadings, 'consumption' => $consumption, 'currentdate' => $currentdate]);
    }

    public function getAccountSettingsindex(){
        $user = Auth::user();
        return view('User-Dashboard.Account-Settings.index', ['user' => $user]);
    }

    public function getProfileIndex(){
        $user = Auth::user();
        return view('User-Dashboard.Profile.index', ['user' => $user]);
    }

    public function deleteBill($id){
        $bill = MeterReadings::find($id);
        $bill->delete();
        return redirect()->route()->with('info', 'Bill Created at'.$bill->created_at.' is successfully deleted');
    }
}
