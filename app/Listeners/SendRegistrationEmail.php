<?php

namespace App\Listeners;

use App\Events\RegistrationCompleted;
use App\Notifications\RegistrationNotification;
use App\Repositories\ItemRepository;

use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Facades\Mail;
use App\Mail\RegistrationEmail;

class SendRegistrationEmail implements ShouldQueue
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {

    }

    /**
     * Handle the event.
     *
     * @param  RegistrationCompleted $event
     * @return void
     */
    public function handle(RegistrationCompleted $event)
    {
        Mail::to($event->user)->send(new RegistrationEmail($event->user));
        //$event->user->notify(new  RegistrationNotification());
    }
}
