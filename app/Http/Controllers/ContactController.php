<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\ContactForms;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function submitForm(Request $request)
    {
        
        // dd($request->all());
        // $request->all('name'); // 多多
        // $request->all('action'); //  tcd_submit_form

        // /**
        //  * お名前: 1
        //  * ----------
        //  * ふりがな: 2
        //  * ----------
        //  * 電話番号: 3
        //  * ----------
        //  * メールアドレス: b97b01067@gmail.com
        //  * ----------
        //  * ご用件: 会社について
        //  * ----------
        //  * 希望職種（採用希望の方）: 
        //  * ----------
        //  * お問い合わせ内容: 5
        //  * ----------
        //  */
        // $request->all('data');
        // $request->all('id'); // 2
        // $request->all('mail'); // b97b01067@gmail.com
        $contactForms = $request->all();
        $post = new ContactForms();
        $post->action = $contactForms['action'];
        $post->data = $contactForms['data'];
        $post->form_id = $contactForms['id'];

        $post->mail = $contactForms['mail'];
        $post->steps = json_encode($contactForms['steps'] ?? '');
        $post->created_at = time();
        $post->updated_at = time();
        //dd($post);
        $post->save();
    }
}
