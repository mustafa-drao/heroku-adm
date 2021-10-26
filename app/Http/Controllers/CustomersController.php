<?php

namespace App\Http\Controllers;

use App\Models\Customers;
use Illuminate\Http\Request;

class CustomersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $search = Customers::all();
        return view('customer.index',compact('search'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function insert(Request $request)
    {
        if($request->isMethod('post')){

            Customers::create($request->all());
            return redirect()->back()->with('user',' ');

        }else{
            return view('insert-cust');
        }

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function view($id)
    {
        $custi = Customers::where('CustomerID',$id)->first();
        return view('viewCustomer',['customer'=>$custi]);
    }


}
