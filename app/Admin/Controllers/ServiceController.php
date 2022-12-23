<?php

namespace App\Admin\Controllers;

use App\Models\Service;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Facades\Admin;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;
use Image;

class ServiceController extends AdminController
{
    protected $title = 'Service';

    protected function grid()
    {
        $grid = new Grid(new Service());

        $grid->column('id', __('Id'));
        $grid->column('name', __('Name'));
        $grid->column('description', __('Description'))->display(function ($description){
            return "". $description ."";
        });
        $grid->column('image', __('Image'))->image('/uploads/');
        $grid->column('status', __('Status'));
        $grid->column('createdUser.name', __('Created by'));
        $grid->column('updatedUser.name', __('Updated by'));
        $grid->column('created_at', __('Created at'));
        $grid->column('updated_at', __('Updated at'));

        $grid->export(function ($export) {
            $export->except(['image']);
        });

        $grid->disableExport();
        $grid->disableFilter();
        $grid->disableRowSelector();

        return $grid;
    }

    protected function detail($id)
    {
        $show = new Show(Service::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('name', __('Name'));
        $show->field('description', __('Description'))->as(function ($description) {
            return "{!!". $description ."!!}";
        });
        $show->field('image', __('Image'))->image("/uploads/");
        $show->field('status', __('Status'));
        $show->field('createdUser.name', __('Updated by'));
        $show->field('updatedUser.name', __('Created by'));
        $show->field('created_at', __('Created at'));
        $show->field('updated_at', __('Updated at'));

        return $show;
    }

    protected function form()
    {
        $form = new Form(new Service());

        $form->text('name', __('Name'));
        $form->ckeditor('description', __("Description"));
        $form->image('image', __('Image'));
        $form->switch('status', __('Status'))->default(1);
        $form->saving(function (Form $form) {
            if($form->isCreating()){
                $form->model()->created_by = Admin::user()->id;

            }else{
                $form->model()->updated_by = Admin::user()->id;
            }
        });
        $form->saved(function (Form $form) {
            $image = public_path('uploads/'.$form->model()->image);
            Image::make($image)->resize(500, 320)->save();
        });

        return $form;
    }
}
