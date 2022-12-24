<?php

namespace App\Admin\Controllers;

use App\Models\Team;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Facades\Admin;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;
use Image;

class TeamController extends AdminController
{
    protected $title = 'Team';

    protected function grid()
    {
        $grid = new Grid(new Team());

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
        $show = new Show(Team::findOrFail($id));

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
        $form = new Form(new Team());

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

        $form->saved(function (Form $form) {
            if(!empty($form->model()->image)){
                $image = public_path('uploads/'.$form->model()->image);
                if(!empty($image)) Image::make($image)->resize(800, 800)->save();
            }
        });

        return $form;
    }
}
