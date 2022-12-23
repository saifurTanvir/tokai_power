<?php

namespace App\Admin\Controllers;

use App\Models\AboutUs;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Facades\Admin;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class AboutUsController extends AdminController
{
    protected $title = 'About Us';

    protected function grid()
    {
        $grid = new Grid(new AboutUs());

        $grid->column('id', __('Id'));
        $grid->column('image', __('Image'))->image("/uploads/");
        $grid->column('clients', __('Happy Clients'));
        $grid->column('projects', __('Completed Project'));
        $grid->column('products', __('Number of Product'));
        $grid->column('workers', __('Hard Workers'));
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
        $show = new Show(AboutUs()::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('image', __('Image'))->image("/uploads/");
        $show->field('clients', __('Happy Clients'));
        $show->field('projects', __('Completed Project'));
        $show->field('products', __('Number of Product'));
        $show->field('workers', __('Hard Workers'));
        $show->field('status', __('Status'));
        $show->field('createdUser.name', __('Created by'));
        $show->field('updatedUser.name', __('Updated by'));
        $show->field('created_at', __('Created at'));
        $show->field('updated_at', __('Updated at'));

        return $show;
    }

    protected function form()
    {
        $form = new Form(new AboutUs());

        $form->image('image', __('Image'));
        $form->number('clients', __('Happy Clients'));
        $form->number('projects', __('Completed Project'));
        $form->number('products', __('Number of Product'));
        $form->number('workers', __('Hard Workers'));
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
