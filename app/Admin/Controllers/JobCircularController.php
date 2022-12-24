<?php

namespace App\Admin\Controllers;

use App\Models\JobCircular;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Facades\Admin;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class JobCircularController extends AdminController
{
    protected $title = 'JobCircular';

    protected function grid()
    {
        $grid = new Grid(new JobCircular());

        $grid->column('id', __('Id'));
        $grid->column('post_name', __('Post name'));
        $grid->column('contaxt', __('Contaxt'))->display(function ($contaxt){
            return "". $contaxt ."";
        });
        $grid->column('responsibility', __('Responsibility'))->display(function ($responsibility){
            return "". $responsibility ."";
        });
        $grid->column('nature', __('Nature'))->display(function ($nature){
            return "". $nature ."";
        });
        $grid->column('requirment_education', __('Requirment education'))->display(function ($requirment_education){
            return "". $requirment_education ."";
        });
        $grid->column('requirment_experience', __('Requirment experience'))->display(function ($requirment_experience){
            return "". $requirment_experience ."";
        });
        $grid->column('salary', __('Salary'));
        $grid->column('benefits', __('Benefits'));
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
        $show = new Show(JobCircular::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('post_name', __('Post name'));
        $show->field('contaxt', __('Contaxt'));
        $show->field('responsibility', __('Responsibility'));
        $show->field('nature', __('Nature'));
        $show->field('requirment_education', __('Requirment education'));
        $show->field('requirment_experience', __('Requirment experience'));
        $show->field('salary', __('Salary'));
        $show->field('benefits', __('Benefits'));
        $show->field('status', __('Status'));
        $show->field('createdUser.name', __('Created by'));
        $show->field('updatedUser.name', __('Updated by'));
        $show->field('created_at', __('Created at'));
        $show->field('updated_at', __('Updated at'));

        return $show;
    }

    protected function form()
    {
        $form = new Form(new JobCircular());

        $form->text('post_name', __('Post name'));
        $form->ckeditor('contaxt', __('Contaxt'));
        $form->ckeditor('responsibility', __('Responsibility'));
        $form->ckeditor('nature', __('Nature'));
        $form->ckeditor('requirment_education', __('Requirment education'));
        $form->ckeditor('requirment_experience', __('Requirment experience'));
        $form->text('salary', __('Salary'));
        $form->ckeditor('benefits', __('Benefits'));
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
