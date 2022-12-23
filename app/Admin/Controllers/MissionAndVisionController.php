<?php

namespace App\Admin\Controllers;

use App\Models\MissionAndVision;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Facades\Admin;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class MissionAndVisionController extends AdminController
{
    protected $title = 'Mission & Vision';

    protected function grid()
    {
        $grid = new Grid(new MissionAndVision());

        $grid->column('id', __('Id'));
        $grid->column('message_type', __('Message type'));
        $grid->column('message', __('Message'))->display(function ($message) {
            return "". $message ."";
        });
        $grid->column('status', __('Status'));
        $grid->column('createdUser.name', __('Created by'));
        $grid->column('updatedUser.name', __('Updated by'));
        $grid->column('created_at', __('Created at'));
        $grid->column('updated_at', __('Updated at'));

        $grid->disableExport();
        $grid->disableFilter();
        $grid->disableRowSelector();

        return $grid;
    }

    protected function detail($id)
    {
        $show = new Show(MissionAndVision::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('message_type', __('Message type'));
        $show->field('message', __('Message'));
        $show->field('status', __('Status'));
        $show->field('createdUser.name', __('Created by'));
        $show->field('updatedUser.name', __('Updated by'));
        $show->field('created_at', __('Created at'));
        $show->field('updated_at', __('Updated at'));

        return $show;
    }

    protected function form()
    {
        $form = new Form(new MissionAndVision());

        $form->radio('message_type', __('Message type'))->options(['Mission' => "Mission", "Vision" => "Vision"]);
        $form->ckeditor('message', __('Message'));
        $form->switch('status', __('Status'))->default(1);
        $form->saving(function (Form $form) {
            if($form->isCreating()){
                $form->model()->created_by = Admin::user()->id;

            }else{
                $form->model()->updated_by = Admin::user()->id;
            }
        });

        return $form;
    }
}
