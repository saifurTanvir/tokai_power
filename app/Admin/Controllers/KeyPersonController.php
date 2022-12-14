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
        $grid->column('facebook_url', __('Facebook URL'));
        $grid->column('instagram_url', __('Instagram URL'));
        $grid->column('twitter_url', __('Twitter URL'));
        $grid->column('linkedin_url', __('Linked In URL'));
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
        $show = new Show(KeyPerson::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('name', __('Name'));
        $show->field('image', __('image'))->image("/uploads/");
        $show->field('designation', __('Designation'));
        $show->field('speech', __('Speech'));
        $show->field('facebook_url', __('Facebook URL'));
        $show->field('instagram_url', __('Instagram URL'));
        $show->field('twitter_url', __('Twitter URL'));
        $show->field('linkedin_url', __('Linked In URL'));
        $show->field('status', __('Status'));
        $show->field('createdUser.name', __('Created by'));
        $show->field('updatedUser.name', __('Updated by'));
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
        $form->url('facebook_url', __('Facebook URL'));
        $form->url('instagram_url', __('Instagram URL'));
        $form->url('twitter_url', __('Twitter URL'));
        $form->url('linkedin_url', __('Linked In URL'));
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
