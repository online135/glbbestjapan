<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\ContactFormModel;
use App\Models\MailModel;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function submitForm(Request $request)
    {
        $contactForm = $request->all();
        $mail = $contactForm['mail'];

        $post = new ContactFormModel();
        $post->action = $contactForm['action'];
        $post->data = $contactForm['data'];
        $post->form_id = $contactForm['id'];
        $post->mail = $mail;
        $post->steps = json_encode($contactForm['steps'] ?? '');
        $post->created_at = time();
        $post->updated_at = time();
        $post->save();

        $mailModel = new MailModel($mail);
        $mailModel->sendFormSubmittedMail();
    }
}
