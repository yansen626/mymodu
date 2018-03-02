<?php
/**
 * Created by PhpStorm.
 * User: GMG-Developer
 * Date: 02/10/2017
 * Time: 15:33
 */

namespace App\Mail;


use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactUs extends Mailable
{
    use Queueable, SerializesModels;
    protected $name;
    protected $email;
    protected $description;

    public function __construct($name, $email, $description)
    {
        $this->name = $name;
        $this->email = $email;
        $this->description = $description;
    }

    public function build()
    {
        return $this->from('randf77@gmail.com')
            ->subject('Contact Us')
            ->view('email.contact-us')
            ->with([
                'name'  => $this->name,
                'email' => $this->email,
                'description' => $this->description
            ]);
    }
}