<?php

namespace App\Admin\Controllers;

use App\Models\Acheivement;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Facades\Admin;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class AcheivementController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Acheivement';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Acheivement());

        $grid->column('id', __('Id'));
        $grid->column('image', __('Image'))->image('/uploads/');
        $grid->column('certificate', __('Certificate'));
        $grid->column('certification_name', __('Certification name'));
        $grid->column('certification_detail', __('Certification detail'))->display(function ($c_detail){
            return "". $c_detail ."";
        });
        $grid->column('learning', __('Learning'))->display(function ($learning){
            return "". $learning ."";
        });
        $grid->column('status', __('Status'));
        $grid->column('user.name', __('Created by'));
        $grid->column('user.name', __('Updated by'));
        $grid->column('created_at', __('Created at'));
        $grid->column('updated_at', __('Updated at'));

        return $grid;
    }

    /**
     * Make a show builder.
     *
     * @param mixed $id
     * @return Show
     */
    protected function detail($id)
    {
        $show = new Show(Acheivement::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('image', __('Image'))->image("/uploads/");
        $show->field('certificate', __('Certificate'));
        $show->field('certification_name', __('Certification name'));
        $show->field('certification_detail', __('Certification detail'));
        $show->field('learning', __('Learning'));
        $show->field('status', __('Status'));
        $show->field('user.name', __('Created by'));
        $show->field('user.name', __('Updated by'));
        $show->field('created_at', __('Created at'));
        $show->field('updated_at', __('Updated at'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new Acheivement());

        $form->image('image', __('Image'));
        $form->text('certificate', __('Certificate'));
        $form->text('certification_name', __('Certification name'));
        $form->ckeditor('certification_detail', __('Certification detail'));
        $form->ckeditor('learning', __('Learning'));
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
