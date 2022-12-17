<?php

namespace App\Admin\Controllers;

use App\Models\Carosel;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Facades\Admin;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class CaroselController extends AdminController
{
    protected $title = 'Carosel';

    protected function grid()
    {
        $grid = new Grid(new Carosel());

        $grid->column('id', __('Id'));
        $grid->column('image', __('Image'))->image("/uploads/");
        $grid->column('title', __('Title'));
        $grid->column('description', __('Description'));
        $grid->column('status', __('Status'));
        $grid->column('created_by', __('Created by'));
        $grid->column('updated_by', __('Updated by'));
        $grid->column('created_at', __('Created at'));
        $grid->column('updated_at', __('Updated at'));

        return $grid;
    }

    protected function detail($id)
    {
        $show = new Show(Carosel::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('image', __('Image'))->image("/uploads/");
        $show->field('title', __('Title'));
        $show->field('description', __('Description'));
        $show->field('status', __('Status'));
        $show->field('created_by', __('Created by'));
        $show->field('updated_by', __('Updated by'));
        $show->field('created_at', __('Created at'));
        $show->field('updated_at', __('Updated at'));

        return $show;
    }

    protected function form()
    {
        $form = new Form(new Carosel());

        $form->image('image', __('Image'));
        $form->text('title', __('Title'));
        $form->textarea('description', __('Description'));
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
