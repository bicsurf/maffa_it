<?php

namespace App\Mail;

use App\Models\User;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Storage;
use Illuminate\Contracts\Queue\ShouldQueue;

class sendContact extends Mailable
{
    use Queueable, SerializesModels;

    public $info;
  

    public function __construct($info)
    {
       $this->info=$info;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('maffa@noreply.com')->view('mail.sendContact', [
            'info'=>$this->info
        ])
            ->attach(Storage::url($this->info['cv']), [
                'as'=>'cv.pdf',
                'mime'=>'application/pdf',
            ]);

    }
}