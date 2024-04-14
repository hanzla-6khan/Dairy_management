<?php

namespace App\Http\Controllers;

use App\Models\ShopSale;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class ShopSaleController extends Controller
{
    public function index(){
       $data['customers']=ShopSale::all();
       return view('shop_sale_panel.index',$data);
    }
    public function create(){
        return view('shop_sale_panel.create');
    }
    public function store(Request $request){
        $request->validate([
            'material' => 'required|string|max:255',
            'cost' => 'required|numeric',
            'remarks' => 'nullable|string',
            'total_bill' => 'required|numeric',
            'payment' => 'required|numeric',
            'labour_name' => 'nullable|string|max:255',
            'truck_no' => 'nullable|string|max:255',
        ]);
        $shop_sale = new ShopSale;
        $shop_sale->material = $request->material;
        $shop_sale->cost=$request->cost;
        $shop_sale->total_cost = $request->total_bill;
        $shop_sale->remarks = $request->remarks;
        $shop_sale->total_bill = $request->total_bill;
        $shop_sale->payment = $request->payment;
        $shop_sale->labour_name = $request->labour_name;
        $shop_sale->truck_no = $request->truck_no;
        $shop_sale->save();
        return back()->with('success', 'Shop sale added successfully.');
    }
    public function edit($id){
        $shop_sale = ShopSale::find($id);
        return view('shop_sale_panel.edit',compact('shop_sale'));
    }
    public function update(Request $request, $id){
        $shop_sale = ShopSale::find($id);
        $shop_sale->material = $request->material;
        $shop_sale->cost=$request->cost;
        $shop_sale->total_cost = $request->total_bill;
        $shop_sale->remarks = $request->remarks;
        $shop_sale->total_bill = $request->total_bill;
        $shop_sale->payment = $request->payment;
        $shop_sale->labour_name = $request->labour_name;
        $shop_sale->truck_no = $request->truck_no;
        $shop_sale->save();
        return back()->with('success', 'Shop sale updated successfully.');
    }
    public function delete($id){
        $shop_sale = ShopSale::find($id);
        $shop_sale->delete();
        return back()->with('success', 'Shop sale deleted successfully.');
    }
}
