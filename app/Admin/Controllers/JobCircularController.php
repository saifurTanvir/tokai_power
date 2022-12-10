<?php

namespace App\Admin\Controllers;

use App\Models\JobCircular;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class JobCircularController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'JobCircular';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new JobCircular());

        $grid->column('id', __('Id'));
        $grid->column('post_name', __('Post name'));
        $grid->column('contaxt', __('Contaxt'));
        $grid->column('responsibility', __('Responsibility'));
        $grid->column('nature', __('Nature'));
        $grid->column('requirment_education', __('Requirment education'));
        $grid->column('requirment_experience', __('Requirment experience'));
        $grid->column('salary', __('Salary'));
        $grid->column('benefits', __('Benefits'));
        $grid->column('status', __('Status'));
        $grid->column('created_by', __('Created by'));
        $grid->column('updated_by', __('Updated by'));
        $grid->column('created_at', __('Created at'));
        $grid->column('updated_at', __('Updated at'));

        return $grid;
    }

    /**
     * Make a show builder.
     *
     * @param mixed $id
     * @return Show
     */
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
        $show->field('created_by', __('Created by'));
        $show->field('updated_by', __('Updated by'));
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
        $form = new Form(new JobCircular());

        $form->text('post_name', __('Post name'));
        $form->textarea('contaxt', __('Contaxt'));
        $form->textarea('responsibility', __('Responsibility'));
        $form->textarea('nature', __('Nature'));
        $form->textarea('requirment_education', __('Requirment education'));
        $form->textarea('requirment_experience', __('Requirment experience'));
        $form->number('salary', __('Salary'));
        $form->textarea('benefits', __('Benefits'));
        $form->switch('status', __('Status'))->default(1);
        $form->number('created_by', __('Created by'));
        $form->number('updated_by', __('Updated by'));

        return $form;
    }
}
