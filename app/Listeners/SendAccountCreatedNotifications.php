<?php

namespace App\Listeners;

use Illuminate\Support\Facades\Log;
use App\Models\User;
use App\Notifications\AccountCreation;
use App\Events\AccountCreated;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class SendAccountCreatedNotifications implements ShouldQueue
{
    /**
     * Create the event listener.
     */

    public function __construct()
    {

    }

    /**
     * Handle the event.
     */
    public function handle(AccountCreated $event): void
    {
        $user = $event->user;
        $user->notify(new AccountCreation($user));
    }
}
