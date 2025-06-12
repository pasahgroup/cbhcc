<?php

namespace App\Http\Controllers;

use App\Models\donor;
use App\Http\Requests\StoredonorRequest;
use App\Http\Requests\UpdatedonorRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;




class DonorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // return view('donor.donor');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

public function donor()
    {
        return view('donor.donor');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

            if(request('logo')){
                $attach = request('logo');
                foreach($attach as $attached){

                     // Get filename with extension
                     $fileNameWithExt = $attached->getClientOriginalName();
                     // Just Filename
                     $filename = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
                     // Get just Extension
                     $extension = $attached->getClientOriginalExtension();
                     //Filename to store
                     $imageToStore = $filename.'_'.time().'.'.$extension;
                     //upload the image
                      //$path = $attached->storeAs('wawa/hh/jkl/donor_photos/', $imageToStore);
                    $path = $attached->storeAs('donor_photos/', $imageToStore);

         }
      }
//dd($imageToStore);


        $donors = donor::UpdateOrCreate([
        'donor_name'=>request('donor_name'),
    ],[
        'contact_number'=>request('contact_number'),
        'email'=>request('email'),
        'address'=>request('address'),
        'country'=>request('country'),       
        'logo'=>$imageToStore,      
       'status'=>request('status')
        ]);

    return view('donor.donor');
    }


    /**
     * Display the specified resource.
     */
    public function show(donor $donor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(donor $donor)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatedonorRequest $request, donor $donor)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(donor $donor)
    {
        //
    }
}
