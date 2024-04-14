<?php
namespace App\Http\Controllers;
use App\Models\Customer;
use App\Models\Asset;
use App\Models\User;
use App\Models\SubAsset;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {


        $assets = Asset::all();
        return view('customer.addcustomer', compact('assets'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //dd($request->all());
        $validatedData = $request->validate([
            'name_en' => 'required|string',
            'name_ur' => 'required|string',
            'address' => 'required|string',
            'balance_limit' => 'required|integer',
            'cnic' => 'required|size:13|unique:customers',
            'sms_name' => 'nullable|string',
            'mobile1' => 'required|numeric|digits:11',
            'mobile2' => 'nullable|numeric|digits:11',
            'category' => 'required|string',
            'asset_id' => 'required|string',
            'sub_asset_id' => 'required|string',

        ]);
        $customer = Customer::create($request->except('_token'));
        return redirect()->route('customers.index')->with('success', 'Customer created successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Customer $customer)
    {


        $customers = Customer::all();
        return view('customer.customer_list', compact('customers'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Customer $customer, $id)
    {
        $customer = Customer::findOrFail($id);
        $assets = Asset::all();
        return view('customer.editcustomer', compact('customer', 'assets'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Customer $customer)
    {
        $validatedData = $request->validate([
            'name_en' => 'required|string',
            'name_ur' => 'required|string',
            'address' => 'required|string',
            'balance_limit' => 'required|integer',
            'cnic' => 'required|size:13|unique:customers,cnic,' .  $customer->id,
            'sms_name' => 'nullable|string',
            'mobile1' => 'required|numeric|digits:11',
            'mobile2' => 'nullable|numeric|digits:11',
            'category' => 'required|string',
            'asset_id' => 'required|string',
            'sub_asset_id' => 'required|string',
        ]);

        try {
            $customer = Customer::findOrFail($customer->id);
            $customer->update($validatedData);

            return redirect()->route('customers.show')->with('success', 'Customer updated successfully!');
        } catch (\Exception $e) {
            dd($e);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Customer $customer)
    {
        $customer->delete();
        return redirect()->route('customers.show')->with('success', 'Customer deleted successfully!');
    }


    // get sub assets by asset id

    public function getSubAssets($assetId)
    {
        $subAssets = SubAsset::whereAssetId($assetId)->orderBy("Assets_name_en")->get();
        $options = '<option value="">Select Sub Asset</option>';
        foreach ($subAssets as $sa) {
            $options .= "<option value='{$sa->id}'>{$sa->Assets_name_en}</option>";
        }

        return $options;
    }
}
