<?php

namespace App\Admin\Actions\Post;

use Encore\Admin\Actions\RowAction;
use Exception;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Mail;

class SendMail extends RowAction
{
    public $name = 'メールを送る';

    public function handle(Model $model)
    {
        if ($model->status)
        {
            $mail = $model->mail;
            $message = "We had read your submission, start handle and we might contact with you shortly";
            try {
            Mail::raw($message, function($message) use ($mail)
                {
                    $message->from("b97b010671@gmail.com", 'Global Best Japan');
                 
                    $message->to($mail)->subject('We had read you submission');
                });
            } catch (Exception $e)
            {}


            $model->status = false;
            $model->save();
        } else
        {
            return $this->response()->error("メールは以前に送信されました")->refresh();
        }


        return $this->response()->success("メールを送りしました")->refresh();
    }

}