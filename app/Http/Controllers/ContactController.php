<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\ContactFormsModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function submitForm(Request $request)
    {
        $contactForms = $request->all();
        $mail = $contactForms['mail'];

        $post = new ContactFormsModel();
        $post->action = $contactForms['action'];
        $post->data = $contactForms['data'];
        $post->form_id = $contactForms['id'];
        $post->mail = $mail;
        $post->steps = json_encode($contactForms['steps'] ?? '');
        $post->created_at = time();
        $post->updated_at = time();
        $post->save();


        $message = "ご連絡ありがとうございます。担当者からご連絡いたしますので少々お待ちください。";
        
        Mail::raw($message, function($message) use ($mail)
        {
            $message->from('b97b01067@gmail.com', 'Global Best Japan');
         
            $message->to($mail)->subject('Global Best Japan');
        });
    }
}
