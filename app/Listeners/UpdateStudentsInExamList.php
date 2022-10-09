<?php

namespace App\Listeners;

use App\Events\StudentSubscribed;

class UpdateStudentsInExamList
{


    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  \App\Events\StudentSubscribed  $event
     * @return void
     */
    public function handle(StudentSubscribed $event)
    {
        $student = $event->student;
        return $student;
    }
}
