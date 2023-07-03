<?php

namespace App\Observers;

use App\Models\Patient;
use Illuminate\Support\Facades\Log;

class PatientObserver
{
    /**
     * Handle the Patient "created" event.
     */
    public function created(Patient $patient): void
    {
        Log::channel('patient_model')->info('Created: ',['patient' => $patient]);
    }

    /**
     * Handle the Patient "updated" event.
     */
    public function updated(Patient $patient): void
    {
        Log::channel('patient_model')->info('Updated: ',['patient' => $patient]);
    }

    /**
     * Handle the Patient "deleted" event.
     */
    public function deleted(Patient $patient): void
    {
        Log::channel('patient_model')->info('Deleted: ',['patient' => $patient]);
    }

    /**
     * Handle the Patient "restored" event.
     */
    public function restored(Patient $patient): void
    {
        Log::channel('patient_model')->info('Restored: ',['patient' => $patient]);
    }

    /**
     * Handle the Patient "force deleted" event.
     */
    public function forceDeleted(Patient $patient): void
    {
        Log::channel('patient_model')->info('Force deleted: ',['patient' => $patient]);
    }
}
