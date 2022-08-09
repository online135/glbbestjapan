<?php

namespace App\Admin\Actions\Post;

use Encore\Admin\Actions\RowAction;
use Illuminate\Database\Eloquent\Model;

class Status extends RowAction
{
    public $name = '状態を変える';

    public function handle(Model $model)
    {
        if ($model->status)
        {
            $model->status = false;
            $model->save();
        } 
        else
        {
            $model->status = true;
            $model->save();
        }


        return $this->response()->success('状態を正常に変更しました')->refresh();
    }

}