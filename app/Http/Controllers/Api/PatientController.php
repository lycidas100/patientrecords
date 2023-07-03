<?php

namespace App\Http\Controllers\Api;
use App\Http\Controllers\Controller;
use App\Models\Patient;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Http\Resources\PatientResource;
use App\Http\Resources\PatientCollection;
use Illuminate\Support\Facades\Log;

class PatientController extends Controller
{
   
    
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return new PatientCollection(Patient::all());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request,Patient $patient)
    {
       
        $this->validate($request,[

            'name'=>'required',
            'phone'=>'required',
            'email' => 'required|email'        
        ]);

        $patient->name = $request->name;
        $patient->phone = $request->phone;
        $patient->email = $request->email;

        $patient->save();

        $url = config('app.url');

        $response = Http::post($url.'/api/patient-sms', ['id' => $patient->id,'sms' =>'Welcome to our practice']);
       

    }

    /**
     * Display the specified resource.
     */
    public function show(Patient $patient)
    {
        return new PatientResource($patient);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Patient $patient)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pateint $patient)
    {
        //
    }

    public function sendSms(Request $request){

        $this->validate($request,[

            'id'=>'required',
            'sms'=>'required|min:10'
                 
        ]);

            
            Log::channel('patient_sms')->info('Sms sent: ',['id' => $request->id,'sms' => $request->sms]);
        
    }
}
