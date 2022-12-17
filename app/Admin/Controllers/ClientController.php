<?php

namespace App\Admin\Controllers;

use App\Models\Client;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Facades\Admin;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class ClientController extends AdminController
{
    protected $title = 'Client';

    protected function grid()
    {
        $grid = new Grid(new Client());

        $grid->column('id', __('Id'));
        $grid->column('parent_company', __('Parent company'));
        $grid->column('company', __('Company'));
        $grid->column('logo', __('Logo'))->image("/uploads/");
        $grid->column('address', __('Address'));
        $grid->column('product', __('Product'));
        $grid->column('capacity', __('Capacity'));
        $grid->column('quantity', __('Quantity'));
        $grid->column('status', __('Status'));
        $grid->column('user.name', __('Created by'));
        $grid->column('user.name', __('Updated by'));
        $grid->column('created_at', __('Created at'));
        $grid->column('updated_at', __('Updated at'));

        return $grid;
    }

    protected function detail($id)
    {
        $show = new Show(Client::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('parent_company', __('Parent company'));
        $show->field('company', __('Company'));
        $show->field('logo', __('Logo'))->image("/uploads/");
        $show->field('address', __('Address'));
        $show->field('product', __('Product'));
        $show->field('capacity', __('Capacity'));
        $show->field('quantity', __('Quantity'));
        $show->field('status', __('Status'));
        $show->field('user.name', __('Created by'));
        $show->field('user.name', __('Updated by'));
        $show->field('created_at', __('Created at'));
        $show->field('updated_at', __('Updated at'));

        return $show;
    }

    protected function form()
    {
        $form = new Form(new Client());

        $form->text('parent_company', __('Parent company'));
        $form->text('company', __('Company'));
        $form->image('logo', __('Logo'));
        $form->text('address', __('Address'));
        $form->text('product', __('Product'));
        $form->text('capacity', __('Capacity'));
        $form->number('quantity', __('Quantity'));
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
