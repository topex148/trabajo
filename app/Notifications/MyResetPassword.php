<?php

namespace App\Notifications;

use Illuminate\Auth\Notifications\ResetPassword;
use Illuminate\Notifications\Messages\MailMessage;

class MyResetPassword extends ResetPassword
{
    public function toMail($notifiable)
    {
        return (new MailMessage)
                 ->subject('Solicitud de reestablecimiento de contraseña')
                ->line('Estás recibiendo este correo porque hiciste una solicitud de recuperacion de contraseña para tu cuenta.')
                ->action('Recuperar contraseña', url('password/reset', $this->token))
                ->line('Si no realizaste esta solicitud, no se requiere realizar ninguna otra acción.');

    }
}
