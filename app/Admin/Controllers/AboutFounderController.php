<?php

namespace App\Admin\Controllers;

use App\Models\AboutFounder;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Facades\Admin;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class AboutFounderController extends AdminController
{
    protected $title = 'AboutFounder';

    protected function grid()
    {
        $grid = new Grid(new AboutFounder());

        $grid->column('id', __('Id'));
        $grid->column('name', __('Name'));
        $grid->column('image', __('Image'))->image("/uploads/");
        $grid->column('education', __('Education'))->display(function ($education){
            return "". $education ."";
        });
        $grid->column('career', __('Career'))->display(function ($career){
            return "". $career ."";
        });
        $grid->column('speech', __('Speech'))->display(function ($Speech){
            return "". $Speech ."";
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
        $show = new Show(AboutFounder::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('name', __('Name'));
        $show->field('image', __('Image'))->image("/uploads/");
        $show->field('education', __('Education'));
        $show->field('career', __('Career'));
        $show->field('speech', __('Speech'));
        $show->field('status', __('Status'));
        $show->field('createdUser.name', __('Created by'));
        $show->field('updatedUser.name', __('Updated by'));
        $show->field('created_at', __('Created at'));
        $show->field('updated_at', __('Updated at'));

        return $show;
    }

    protected function form()
    {
        $form = new Form(new AboutFounder());

        $form->text('name', __('Name'));
        $form->image('image', __('Image'));
        $form->ckeditor('education', __('Education'));
        $form->ckeditor('career', __('Career'));
        $form->ckeditor('speech', __('Speech'));
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
