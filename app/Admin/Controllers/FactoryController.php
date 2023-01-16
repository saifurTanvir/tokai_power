<?php

namespace App\Admin\Controllers;

use App\Models\Factory;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Facades\Admin;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;
use Image;

class FactoryController extends AdminController
{
    protected $title = 'Factory';

    protected function grid()
    {
        $grid = new Grid(new Factory());

        $grid->column('id', __('Id'));
        $grid->column('title', __('Title'));
        $grid->column('image', __('image'))->image("/uploads/");
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
        $show = new Show(Factory::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('image', __('image'))->image("/uploads/");
        $show->field('title', __('Title'));
        $show->field('status', __('Status'));
        $show->field('createdUser.name', __('Created by'));
        $show->field('updatedUser.name', __('Updated by'));
        $show->field('created_at', __('Created at'));
        $show->field('updated_at', __('Updated at'));

        return $show;
    }

    protected function form()
    {
        $form = new Form(new Factory());

        $form->image('image', __('image'));
        $form->text('title', __('Title'));
        $form->switch('status', __('Status'))->default(1);
        $form->saving(function (Form $form) {
            if($form->isCreating()){
                $form->model()->created_by = Admin::user()->id;

            }else{
                $form->model()->updated_by = Admin::user()->id;
            }
        });

        $form->saved(function (Form $form) {
            if(!empty($form->model()->image)){
                $image = public_path('uploads/'.$form->model()->image);
                if(!empty($image)) Image::make($image)->resize(700, 500)->save();
            }
        });

        return $form;
    }
}
