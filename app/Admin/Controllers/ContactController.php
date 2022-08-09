<?php

namespace App\Admin\Controllers;

use App\Models\ContactFormsModel;
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
        $grid = new Grid(new ContactFormsModel);
        $grid->column('id', __('ID'))->sortable();
        $grid->column('action', __('Form'));
        $grid->column('mail', __('Mail'));
        $grid->column('created_at', __('Created at'));
        $grid->column('updated_at', __('Updated at'));

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
        $show = new Show(ContactFormsModel::findOrFail($id));
        $show->field('id', __('ID'));
        $show->field('mail', __('Mail'));
        $show->data()->unescape()->as(function ($data) {

            if (str_contains($data, "----------"))
            {
                $data = explode("----------", $data);
                $output = "";
                foreach ($data as $d)
                {
                    $output .= "<div>" . $d . "</div>";
                }
                return "{$output}";
            } 
            else
            {
                return "{$data}";
            }

        });
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
        $form = new Form(new ContactFormsModel);

        $form->display('id', __('ID'));
        $form->text('mail', __('Mail'));


        $form->textarea('data', __('Data'))->rows(10);;

        // $show->data()->unescape()->as(function ($data) {

        //     if (str_contains($data, "----------"))
        //     {
        //         $data = explode("----------", $data);
        //         $output = "";
        //         foreach ($data as $d)
        //         {
        //             $output .= "<div>" . $d . "</div>";
        //         }
        //         return "{$output}";
        //     } 
        //     else
        //     {
        //         return "{$data}";
        //     }

        // });

        $form->display('created_at', __('Created At'));
        $form->display('updated_at', __('Updated At'));

        return $form;
    }
}
