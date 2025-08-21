<?php

namespace App\Http\Livewire\Global\Widgets;

use Livewire\Component;
use App\Traits\handleMailsTrait;

class ContactForm extends Component
{
    use handleMailsTrait;

    // Public Variablen
    public string $first_name;
    public string $last_name;
    public string $email;
    public string $phone;
    public string $message = '';
    public bool $data_protection;

    public string $message_length;

    public function refresh(): void
    {
        $this->message_length = strlen(trim($this->message,'/<\/?[^>]+(>|$)/g'));
    }
    public function render()
    {
        $this->refresh();
        return view('global.livewire.widgets.contact-form', [
            'message_length' => $this->message_length,
        ]);
    }

    public function contactUpdate()
    {
        $this->render();
    }

    public function sending(): void
    {
        $emailData = [
            'to' => 'kontakt@alina-steinhauer.de',
            'subject' => 'Kontaktanfrage über Webseite',
            'viewTemplate' => 'global.mails.contact-form',
            'first_name' => $this->first_name,
            'last_name' => $this->last_name,
            'email' => $this->email,
            'phone' => $this->phone,
            'message' => $this->message
        ];

        $this->sendMail($emailData);

        $this->first_name = "";
        $this->last_name = "";
        $this->email = "";
        $this->phone = "";
        $this->message = "";

        session()->flash('message', 'Ihre Nachricht wurde erfolgreich versendet.');
    }
}
