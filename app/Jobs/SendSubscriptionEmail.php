<?php

namespace App\Jobs;

use App\Jobs\Job;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Facades\Mail;

class SendSubscriptionEmail extends Job implements ShouldQueue {
    use InteractsWithQueue, SerializesModels;

    protected $user;

    /**
     * SendSubscriptionEmail constructor.
     * @param $user
     */
    public function __construct($user)
    {
        $this->user = $user;
    }


    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle() {
        //throw \Exception();
        //sleep(10);
//        Mail::send('emails.reminder', ['user' => $this->user], function ($m) use ($this->user) {
//            $m->from('no-reply@mydomain.com', 'My App');
//
//            $m->to($this->user->email)->subject('Welcome');
//        });
    }
}
