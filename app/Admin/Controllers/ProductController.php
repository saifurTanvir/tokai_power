<?php

namespace App\Admin\Controllers;

use App\Models\Product;
use App\Models\ProductCategory;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Facades\Admin;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;
use Image;

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
        $grid->column('image', __('Image'))->image("/uploads/");
        $grid->column('image_1', __('Detail Image 1'))->image("/uploads/");
        $grid->column('image_2', __('Detail Image 2'))->image("/uploads/");
        $grid->column('image_3', __('Detail Image 3'))->image("/uploads/");
        $grid->column('image_4', __('Detail Image 4'))->image("/uploads/");
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
        $show = new Show(Product::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('type', __('Type'));
        $show->field('name', __('Name'));
        $show->field('description', __('Description'));
        $show->field('quantity', __('Quantity'));
        $show->field('image', __('Image'))->image("/uploads/");
        $show->field('image_1', __('Detail Image 1'))->image("/uploads/");
        $show->field('image_2', __('Detail Image 2'))->image("/uploads/");
        $show->field('image_3', __('Detail Image 3'))->image("/uploads/");
        $show->field('image_4', __('Detail Image 4'))->image("/uploads/");
        $show->field('status', __('Status'));
        $show->field('createdUser.name', __('Created by'));
        $show->field('updatedUser.name', __('Updated by'));
        $show->field('created_at', __('Created at'));
        $show->field('updated_at', __('Updated at'));

        return $show;
    }

    protected function form()
    {
        $form = new Form(new Product());

        $form->text('name', __('Name'));
        $form->image('image', __('Image'));
        $form->select('type', __('Category'))->options(function ($type){
            $productCategory = ProductCategory::where('status', 1)->pluck('category_name', 'category_name');
            return $productCategory;
        });
        $form->ckeditor('description', __('Description'));
        $form->image('image_1', __('Detail Image 1'));
        $form->image('image_2', __('Detail Image 2'));
        $form->image('image_3', __('Detail Image 3'));
        $form->image('image_4', __('Detail Image 4'));
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
            $image = public_path('uploads/'.$form->model()->image);
            Image::make($image)->resize(800, 600)->save();

            $image_1 = public_path('uploads/'.$form->model()->image_1);
            Image::make($image_1)->resize(800, 600)->save();

            $image_2 = public_path('uploads/'.$form->model()->image_2);
            Image::make($image_2)->resize(800, 600)->save();

            $image_3 = public_path('uploads/'.$form->model()->image_3);
            Image::make($image_3)->resize(800, 600)->save();

            $image_4 = public_path('uploads/'.$form->model()->image_4);
            Image::make($image_4)->resize(800, 600)->save();
        });



        return $form;
    }
}
