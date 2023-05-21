<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Customer;

class CustomerController extends Controller
{
    public function index(){
        $url=url('/customer');
        $data=compact('url');
        return view('form')->with($data);
    }
    public function store(Request $req){
        
        $req->validate([
            'name'=>'required',
            'email'=>'required',
            'password'=>'required',
            'password_confirm'=>'required|same:password',
        ]);

        print_r($req->all());

        $customer=new Customer;
        $customer->name=$req['name'];
        $customer->email=$req['email'];
        $customer->password=md5($req['password']);
        $customer->save();
        return redirect('/customer/view');
    }
    public function view(){
        $data=Customer::all();
        return view('customer-view',compact('data'));
    }
    public function delete($id){
       Customer::find($id)->delete();
       return redirect('customer/view');
        
    }
    public function edit($id){
        $customer=Customer::find($id);
        if(is_null($customer)){
            return redirect('customer/view');}
            else{
                $url=url('/customer/update')."/".$id;
                $data=compact('customer','url');
                return view('form',compact('data'))->with($data);
            }
         
     }
     public function update($id,Request $req){
        $customer=Customer::find($id);
        $customer->name=$req['name'];
        $customer->email=$req['email'];
        $customer->save();
        return redirect('customer/view');


     }
}
