<?php

namespace App\Http\Controllers;

use App\Models\Customers;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function index()
        {
            $title = "Register New Customer";
            $url = url("customer");
            return view("create_customer")->with(compact('title','url'));
        }
    public function store(Request $request)
        {   
            $request->validate([
                "name" => "required",
                "email" => "required|email",
                "mobile" => "required|numeric|min:10",
                "password" => "required",
                "confirm_password" => "required|same:password",
                "address" => "required",
            ]);
            $customer = new Customers();
            $customer->name = $request['name'];
            $customer->email = $request['email'];
            $customer->mobile = $request['mobile'];
            $customer->password = md5($request['password']);
            $customer->address = $request['address'];
            $customer->dob = $request['dob'];
            $customer->gender = "M";
            $customer->save();

            return redirect("/customer/view");
        }    
     
    public function view()
        {
            $customers = Customers::all();
            $data = compact("customers");
            return view("customer_view")->with($data);
        } 
        
    public function trash()
        {
            $customers = Customers::onlyTrashed()->get();
            $data = compact('customers');
            return view("customer_trash_view")->with($data);
        } 
        
    public function delete($id)
        {
            $customer = Customers::find($id);
            if(!is_null($customer))
                {
                    $customer->delete();    
                }    
            return redirect("/customer/view");    
        }
    public function restore($id)
        {
            $customer = Customers::withTrashed()->find($id);
            if(!is_null($customer))
                {
                    $customer->restore();    
                }    
            return redirect("/customer/view");    
        }    

    public function edit($id)
        {
            $customer = Customers::find($id);
            $title = "Update Customer Detail";
            $url = url("customer/update/$id");
            if(is_null($customer))
                {
                    return redirect("/customer/view");    
                }
            else
                {
                    $data = compact('customer','url','title');
                    return view("create_customer")->with($data);
                }        
        } 
        public function update($id, Request $request)
        {   
            
            $customer = Customers::find($id);
            $customer->name = $request['name'];
            $customer->email = $request['email'];
            $customer->mobile = $request['mobile'];
            $customer->address = $request['address'];
            $customer->dob = $request['dob'];
            $customer->gender = "M";
            $customer->save();

            return redirect("/customer/view");
        }             
}
