<?php

namespace App\Admin\Controllers;

use App\Models\Portfolio;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Facades\Admin;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class PortfolioController extends AdminController
{
    protected $title = 'Portfolio';

    protected function grid()
    {
        $grid = new Grid(new Portfolio());

        $grid->column('id', __('Id'));
        $grid->column('image', __('image'))->image("/uploads/");
        $grid->column('speech', __('Speech'))->display(function ($speech){
            return "". $speech ."";
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
        $show = new Show(Portfolio::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('image', __('image'))->image("/uploads/");
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
        $form = new Form(new Portfolio());

        $form->image('image', __('image'));
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
