<?php

namespace App\Admin\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Client;
use App\Models\CV;
use App\Models\Product;
use App\Models\Service;
use Encore\Admin\Controllers\Dashboard;
use Encore\Admin\Facades\Admin;
use Encore\Admin\Layout\Column;
use Encore\Admin\Layout\Content;
use Encore\Admin\Layout\Row;

class HomeController extends Controller
{
    public function index(Content $content)
    {
        return Admin::content(function (Content $content) {
            $clientCount = Client::where('status', 1)->count();
            $productCount = Product::where('status', 1)->count();
            $cvCount = CV::where('status', 1)->count();

            $content->header('Dashboard');
            $content->view('dashboard', compact('productCount', 'clientCount', 'cvCount'));
        });
    }
}