<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Record;
use App\Http\Resources\RecordResource;
use App\Http\Resources\RecordCollection;

use Illuminate\Http\Request;

class RecordController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return new RecordCollection(Record::all());
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
    public function store(Request $request,Record $record)
    {
        $this->validate($request,[

            'patient_id'=>'required|integer',
            'description'=>'required|max:255',
                    
        ]);

        $record->patient_id = $request->patient_id;
        $record->description = $request->description;
        $record->save();
    }

    /**
     * Display the specified resource.
     */
    public function show(Record $record)
    {
        return new RecordResource($record);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Record $record)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Record $record)
    {
        //
    }
}
