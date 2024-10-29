<?php

namespace App\Livewire;

use App\Mail\ContactMail;
use App\Models\Contact;
use Livewire\Component;
use Illuminate\Support\Facades\Mail;

class ShowContactUs extends Component
{
    public $first_name, $last_name, $email, $phone, $comments;

    protected $rules = [
        'first_name' => 'required|string|max:255',
        'last_name' => 'required|string|max:255',
        'email' => 'required|email',
        'phone' => 'required|string|max:20',
        'comments' => 'required|string|max:500',
    ];

    public function submitForm()
    {
        $this->validate();

        Contact::create([
            'first_name' => $this->first_name,
            'last_name' => $this->last_name,
            'email' => $this->email,
            'phone' => $this->phone,
            'comments' => $this->comments,
            'status' => 0,

        ]);
        Mail::to('travelshop2365@gmail.com')->send(new ContactMail(
            $this->first_name,
            $this->last_name,
            $this->email,
            $this->phone,
            $this->comments
        ));
    
        $this->reset();

        session()->flash('message', 'Your message has been sent successfully!');
    }


    public function render()
    {
        return view('livewire.show-contact-us');
    }
}
