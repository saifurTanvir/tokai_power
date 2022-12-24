<?php

namespace App\Admin\Controllers;

use App\Models\Client;
use App\Models\CapacityType;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Facades\Admin;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;
use Image;

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
        $grid->column('type', __('Capacity Type'));
        $grid->column('quantity', __('Quantity'));
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
        $show = new Show(Client::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('parent_company', __('Parent company'));
        $show->field('company', __('Company'));
        $show->field('logo', __('Logo'))->image("/uploads/");
        $show->field('address', __('Address'));
        $show->field('product', __('Product'));
        $show->field('type', __('Capacity Type'));
        $show->field('capacity', __('Capacity'));
        $show->field('quantity', __('Quantity'));
        $show->field('status', __('Status'));
        $show->field('createdUser.name', __('Created by'));
        $show->field('updatedUser.name', __('Updated by'));
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
        $form->select('type', __('Capacity Type'))->options(function ($type){
            $capacityTypes = CapacityType::where('status', 1)->pluck('name', 'name');
            return $capacityTypes;
        });
        $form->text('capacity', __('Capacity'));
        $form->number('quantity', __('Quantity'));
        $form->switch('status', __('Status'))->default(1);
        $form->saving(function (Form $form) {
            if($form->isCreating()){
                $form->model()->created_by = Admin::user()->id;

            }else{
                $form->model()->updated_by = Admin::user()->id;
            }
        });

        $form->saved(function (Form $form) {
            if(!empty($form->model()->logo)){
                $image = public_path('uploads/'.$form->model()->logo);
                if(!empty($image)) Image::make($image)->resize(800, 600)->save();
            }
        });

        return $form;
    }
}
