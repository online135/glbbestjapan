<?php

namespace App\Admin\Controllers;

use App\Admin\Actions\Post\SendMail;
use App\Admin\Actions\Post\Status;
use App\Models\ContactFormModel;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class ContactController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Contact';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new ContactFormModel);
        $grid->filter(function($filter){
            $filter->scope('new', '啟動')
                ->where('status', true);
        });
        $grid->column('id', __('ID'))->sortable();
        $grid->column('action', __('Form'));
        $grid->column('mail', __('Mail'));
        $grid->column('status', __('Status'));
        $grid->column('created_at', __('Created at'));
        $grid->column('updated_at', __('Updated at'));

        $grid->actions(function (Grid\Displayers\Actions $actions) {
            $actions->disableDelete();
            $actions->add(new Status);
            $actions->add(new SendMail);
        });
        $grid->model()->orderBy('id', 'desc');
        return $grid;
    }

    /**
     * Make a show builder.
     *
     * @param mixed   $id
     * @return Show
     */
    protected function detail($id)
    {
        $show = new Show(ContactFormModel::findOrFail($id));
        $show->field('id', __('ID'));
        $show->field('mail', __('Mail'));
        $show->data()->unescape()->as(function ($data) {
            $dataArray = json_decode($data, TRUE);
            $output = "";

            foreach ($dataArray[0] as $key => $value)
            {
                $output .= "<div>" . $key . ": ". $value . "</div>";
            }
            return "{$output}";
        });
        $show->field('status', __('Status'));
        $show->field('created_at', __('Created at'));
        $show->field('updated_at', __('Updated at'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new ContactFormModel);
        $form->display('id', __('ID'));
        $form->text('mail', __('Mail'));
        $form->textarea('data', __('Data'))->rows(10);
        $form->radio('status', __('Status'))->options([true => 'On', false => 'Off'])->default(true);
        $form->display('created_at', __('Created At'));
        $form->display('updated_at', __('Updated At'));
        $form->tools(function (Form\Tools $tools) {
            $tools->disableDelete();
        });

        return $form;
    }
}
