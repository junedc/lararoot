<?php

namespace App\Listeners;

use Illuminate\Auth\Events\Login;
use Illuminate\Http\Request;

class LogSuccessfulLogin
{
    /**
     * Create the event listener.
     *
     * @param  Request  $request
     * @return void
     */
    public function __construct(Request $request)
    {
        $this->request = $request;
    }

    /**
     * Handle the event.
     *
     * @param  Login  $event
     * @return void
     */
    public function handle(Login $event)
    {
//        $user = $event->user;
//        $user->dt_access_date = date('Y-m-d H:i:s');
//        $user->s_access_ip = $this->request->ip();
//        $user->save();

          \Log::info('login listener');
    }
}