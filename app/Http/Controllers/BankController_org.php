<?php

namespace App\Http\Controllers;

use App\Models\bank;
//use App\Http\Requests\Request;
use Illuminate\Http\Request;
use App\Http\Requests\UpdatebankRequest;

class BankController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
        $banks=bank::where('status','Active')
        ->get();

        //dd($banks);
       return view('admin.bank.bank');
        //dd('HELLO DONATHA');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

//dd(request('bank_name'));

        $banks = bank::UpdateOrCreate([
        'bank_account_no'=>request('bank_number')
            ],[
         'bank_name'=>request('bank_name'),
        'swift_code'=>request('swift_code'),      
        'bank_holder_name'=>request('bank_holder'),
        'currency'=>request('currency'),       
        'country'=>request('country'),       
       'status'=>'Active'
        ]);
        

      //return view('form'); 
       return redirect('/form');  
        }



    

    /**
     * Display the specified resource.
     */
    public function show(bank $bank)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(bank $bank)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatebankRequest $request, bank $bank)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(bank $bank)
    {
        //
    }
}
