<?php

namespace App\Listeners;

use App\Events\VerificationRejected;

class HandleVerificationRejected
{
    /**
     * Handle the event.
     *
     * @param \MohamadZatar\Nafath\Events\VerificationRejected $event
     * @return void
     */
    public function handle(VerificationRejected $event)
    {
        // Custom logic for handling verification rejection
        // Example: Log or send additional notifications
    }
}
