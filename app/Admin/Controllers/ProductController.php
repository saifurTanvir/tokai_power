<?php

namespace App\Admin\Controllers;

use App\Models\Product;
use App\Models\ProductCategory;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Facades\Admin;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class ProductController extends AdminController
{
    protected $title = 'Product';

    protected function grid()
    {
        $grid = new Grid(new Product());

        $grid->column('id', __('Id'));
        $grid->column('type', __('Type'));
        $grid->column('name', __('Name'));
        $grid->column('description', __('Description'))->display(function ($description){
            return "". $description ."";
        });
        $grid->column('quantity', __('Quantity'));
        $grid->column('images', __('Images'))->image("/uploads/");
        $grid->column('status', __('Status'));
        $grid->column('user.name', __('Created by'));
        $grid->column('user.name', __('Updated by'));
        $grid->column('created_at', __('Created at'));
        $grid->column('updated_at', __('Updated at'));

        $grid->export(function ($export) {
            $export->except(['images']);
        });

        return $grid;
    }

    protected function detail($id)
    {
        $show = new Show(Product::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('type', __('Type'));
        $show->field('name', __('Name'));
        $show->field('description', __('Description'));
        $show->field('quantity', __('Quantity'));
        $show->field('images', __('Images'))->image("/uploads/");
        $show->field('status', __('Status'));
        $show->field('user.name', __('Created by'));
        $show->field('user.name', __('Updated by'));
        $show->field('created_at', __('Created at'));
        $show->field('updated_at', __('Updated at'));

        return $show;
    }

    protected function form()
    {
        $form = new Form(new Product());

        $form->text('name', __('Name'));
        $form->image('images', __('Images'));
        $form->select('type', __('Category'))->options(function ($type){
            $productCategory = ProductCategory::where('status', 1)->pluck('category_name', 'category_name');
            return $productCategory;
        });
        $form->ckeditor('description', __('Description'));
        $form->number('quantity', __('Quantity'));
        $form->switch('status', __('Status'))->default(1);
        $form->saving(function (Form $form) {
            if($form->isCreating()){
                $form->created_by = Admin::user()->id;
            }else{
                $form->updated_by = Admin::user()->id;
            }
        });

        $form->submitted(function (Form $form) {
            $form->images->crop(100, 100, 25, 25);

        });

        return $form;
    }
}
