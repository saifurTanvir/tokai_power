<?php

namespace App\Admin\Controllers;

use App\Models\Client;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class ClientController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Client';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Client());

        $grid->column('id', __('Id'));
        $grid->column('parent_company', __('Parent company'));
        $grid->column('company', __('Company'));
        $grid->column('address', __('Address'));
        $grid->column('product', __('Product'));
        $grid->column('capacity', __('Capacity'));
        $grid->column('quantity', __('Quantity'));
        $grid->column('status', __('Status'));
        $grid->column('created_by', __('Created by'));
        $grid->column('updated_by', __('Updated by'));
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
        $show = new Show(Client::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('parent_company', __('Parent company'));
        $show->field('company', __('Company'));
        $show->field('address', __('Address'));
        $show->field('product', __('Product'));
        $show->field('capacity', __('Capacity'));
        $show->field('quantity', __('Quantity'));
        $show->field('status', __('Status'));
        $show->field('created_by', __('Created by'));
        $show->field('updated_by', __('Updated by'));
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
        $form = new Form(new Client());

        $form->text('parent_company', __('Parent company'));
        $form->text('company', __('Company'));
        $form->text('address', __('Address'));
        $form->text('product', __('Product'));
        $form->text('capacity', __('Capacity'));
        $form->switch('quantity', __('Quantity'));
        $form->switch('status', __('Status'))->default(1);
        $form->number('created_by', __('Created by'));
        $form->number('updated_by', __('Updated by'));

        return $form;
    }
}
