<?php

namespace App\Mail;

use App\Shop;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ShopActivationRequest extends Mailable
{
    use Queueable, SerializesModels;

    public $shop;        # made public so it can be accessible in mail/admin/shop-activation.blade.php
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Shop $shop)
    {       
        $this->shop = $shop;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('mail.admin.shop-activation');
    }
}
