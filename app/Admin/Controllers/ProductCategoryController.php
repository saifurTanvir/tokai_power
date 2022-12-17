<?php

namespace App\Admin\Controllers;

use App\Models\ProductCategory;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Facades\Admin;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class ProductCategoryController extends AdminController
{
    protected $title = 'Product Category';

    protected function grid()
    {
        $grid = new Grid(new ProductCategory());

        $grid->column('id', __('Id'));
        $grid->column('category_name', __('Category Name'));
        $grid->column('created_by', __('Created by'));
        $grid->column('updated_by', __('Updated by'));
        $grid->column('created_at', __('Created at'));
        $grid->column('updated_at', __('Updated at'));

        return $grid;
    }

    protected function detail($id)
    {
        $show = new Show(ProductCategory()::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('category_name', __('Category Name'));
        $show->field('created_by', __('Created by'));
        $show->field('updated_by', __('Updated by'));
        $show->field('created_at', __('Created at'));
        $show->field('updated_at', __('Updated at'));

        return $show;
    }

    protected function form()
    {
        $form = new Form(new ProductCategory());

        $form->text('category_name', __('Category Name'));
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
