<?php

namespace App\Listeners;

use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Http\Response;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Mail;

class EmailVerificationListener
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
     * @param  object  $event
     * @return void
     */
    public function handle($event)
    {
        //Send user welcome message and onboarding guide

        $to = $event->user->email;
        Mail::send('emails.email-verification-confirmation', ['name' => $event->user->name], function ($m) use($to) {
            $m->from('no-reply@shipafrika.com', 'ShipAfrika, LLC');

            $m->to($to)->subject('ShipAfrika\'s Onboarding Guide');
            
        });
        
    }
}
