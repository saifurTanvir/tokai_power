<?php

namespace App\Admin\Controllers;

use App\Models\KeyPerson;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Facades\Admin;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class KeyPersonController extends AdminController
{
    protected $title = 'Key Person';

    protected function grid()
    {
        $grid = new Grid(new KeyPerson());

        $grid->column('id', __('Id'));
        $grid->column('name', __('Name'));
        $grid->column('image', __('image'))->image("/uploads/");
        $grid->column('designation', __('Designation'));
        $grid->column('speech', __('Speech'))->display(function ($speech){
            return "". $speech ."";
        });
        $grid->column('status', __('Status'));
        $grid->column('user.name', __('Created by'));
        $grid->column('user.name', __('Updated by'));
        $grid->column('created_at', __('Created at'));
        $grid->column('updated_at', __('Updated at'));

        return $grid;
    }

    protected function detail($id)
    {
        $show = new Show(KeyPerson::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('name', __('Name'));
        $show->field('image', __('image'))->image("/uploads/");
        $show->field('designation', __('Designation'));
        $show->field('speech', __('Speech'));
        $show->field('status', __('Status'));
        $show->field('user.name', __('Created by'));
        $show->field('user.name', __('Updated by'));
        $show->field('created_at', __('Created at'));
        $show->field('updated_at', __('Updated at'));

        return $show;
    }

    protected function form()
    {
        $form = new Form(new KeyPerson());

        $form->text('name', __('Name'));
        $form->image('image', __('image'));
        $form->text('designation', __('Designation'));
        $form->ckeditor('speech', __('Speech'));
        $form->switch('status', __('Status'))->default(1);
        $form->saving(function (Form $form) {
            if($form->isCreating()){
                $form->created_by = Admin::user()->id;
            }else{
                $form->updated_by = Admin::user()->id;
            }
        });

        return $form;
    }
}
