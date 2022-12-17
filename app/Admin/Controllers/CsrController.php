<?php

namespace App\Admin\Controllers;

use App\Models\CSR;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Facades\Admin;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class CsrController extends AdminController
{
    protected $title = 'CSR';

    protected function grid()
    {
        $grid = new Grid(new CSR());

        $grid->column('id', __('Id'));
        $grid->column('image', __('Image'))->image('/uploads/');
        $grid->column('title', __('Title'));
        $grid->column('description', __('Description'))->display(function ($description){
            return "". $description ."";
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
        $show = new Show(CSR::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('image', __('Image'))->image("/uploads/");
        $show->field('title', __('Title'));
        $show->field('description', __('Description'));
        $show->field('status', __('Status'));
        $show->field('user.name', __('Created by'));
        $show->field('user.name', __('Updated by'));
        $show->field('created_at', __('Created at'));
        $show->field('updated_at', __('Updated at'));

        return $show;
    }

    protected function form()
    {
        $form = new Form(new CSR());

        $form->image('image', __('Image'));
        $form->text('title', __('Title'));
        $form->ckeditor('description', __('Description'));
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
