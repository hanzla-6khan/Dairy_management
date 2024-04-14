<?php

namespace App\Http\Controllers;

use App\Models\CashInput;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class CashInputController extends Controller
{
    public function index(){
$data['customers']=CashInput::all();
return view('Cash_input.index',$data);
    }
    public function create(){
        return view('Cash_input.create');
    }
    public function store(Request $request){
        $request->validate([
            'customer_id' => 'required|string',
            'name' => 'required|string',
            'pre_balance' => 'required|numeric',
            'payment' => 'required|numeric',
            'new_balance' => 'required|numeric',
            'total' => 'required|numeric',
            'remarks' => 'nullable|string',
            'sms' => 'nullable|string',
        ]);
$cashInput=new CashInput();
$cashInput->customer_id=$request->customer_id;
$cashInput->name=$request->name;
$cashInput->pre_balance=$request->pre_balance;
$cashInput->payment=$request->payment;
$cashInput->new_balance=$request->new_balance;
$cashInput->total=$request->total;
$cashInput->remarks=$request->remarks;
$cashInput->sms=$request->sms;
$cashInput->save();
return back()->with('success', 'Cash Input Add successfully.');
    }
    public function edit($id){
        $cashInput=CashInput::find($id);
        return view('Cash_input.edit',compact('cashInput'));
    }
    public function update(Request $request,$id){
        $request->validate([
            'customer_id' => 'required|string',
            'name' => 'required|string',
            'pre_balance' => 'required|numeric',
            'payment' => 'required|numeric',
            'new_balance' => 'required|numeric',
            'total' => 'required|numeric',
            'remarks' => 'nullable|string',
            'sms' => 'nullable|string',
        ]);
        $cashInput=CashInput::find($id);
        $cashInput->customer_id=$request->customer_id;
        $cashInput->name=$request->name;
        $cashInput->pre_balance=$request->pre_balance;
        $cashInput->payment=$request->payment;
        $cashInput->new_balance=$request->new_balance;
        $cashInput->total=$request->total;
        $cashInput->remarks=$request->remarks;
        $cashInput->sms=$request->sms;
        $cashInput->save();
        return back()->with('success', 'cash Input Updated successfully.');
    }
    public function delete($id){
        $cashInput=CashInput::find($id);
        $cashInput->delete();
        return back()->with('success', 'Cash Input deleted successfully.');
    }
}
