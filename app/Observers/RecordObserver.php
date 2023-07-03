<?php

namespace App\Observers;

use App\Models\Record;
use Illuminate\Support\Facades\Log;

class RecordObserver
{
    /**
     * Handle the Record "created" event.
     */
    public function created(Record $record): void
    {
        Log::channel('record_model')->info('Created: ',['record' => $record]);
    }

    /**
     * Handle the Record "updated" event.
     */
    public function updated(Record $record): void
    {
        Log::channel('record_model')->info('Updated: ',['record' => $record]);
    }

    /**
     * Handle the Record "deleted" event.
     */
    public function deleted(Record $record): void
    {
        Log::channel('record_model')->info('Deleted: ',['record' => $record]);
    }

    /**
     * Handle the Record "restored" event.
     */
    public function restored(Record $record): void
    {
        Log::channel('record_model')->info('Restored: ',['record' => $record]);
    }

    /**
     * Handle the Record "force deleted" event.
     */
    public function forceDeleted(Record $record): void
    {
        Log::channel('record_model')->info('Force deleted: ',['record' => $record]);
    }
}
