<?php

namespace App\Admin\Actions\Post;

use App\Models\MailModel;
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

            $mailModel = new MailModel($mail);
            $mailModel->sendAlreadyReadMail();

            $model->status = false;
            $model->save();
        } else
        {
            return $this->response()->error("メールは以前に送信されました")->refresh();
        }

        return $this->response()->success("メールを送りしました")->refresh();
    }

}