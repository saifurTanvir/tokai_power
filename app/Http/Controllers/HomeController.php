<?php

namespace App\Http\Controllers;

use App\Models\AboutFounder;
use App\Models\AboutUs;
use App\Models\Acheivement;
use App\Models\Carosel;
use App\Models\Client;
use App\Models\CSR;
use App\Models\FAQ;
use App\Models\JobCircular;
use App\Models\KeyPerson;
use App\Models\MissionAndVision;
use App\Models\Portfolio;
use App\Models\Product;
use App\Models\ProductCategory;
use App\Models\Service;
use App\Models\Team;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $carosels = Carosel::select('image')->where('status', 1)->get();
        $aboutUs = AboutUs::where('status', 1)->first();
        $productCategories = ProductCategory::select('category_name')->where('status', 1)->get();
        $products = Product::where('status', 1)->get();
        $services = Service::where('status', 1)->get();
        $clients = Client::where('status', 1)->get();
        $faqs = FAQ::where('status', 1)->get();
        $teams = Team::where('status', 1)->get();

        return view('index', compact('carosels', 'aboutUs','productCategories', 'products',
            'services', 'clients', 'faqs', 'teams'));
    }

    public function about_us(){
        $cto = AboutFounder::where('status', 1)->first();
        $keyPersons = KeyPerson::where('status', 1)->get();
        $mission = MissionAndVision::where('status', 1)->where('message_type', 'Mission')->first();
        $vision = MissionAndVision::where('status', 1)->where('message_type', 'Vision')->first();
        $acheivements = Acheivement::where('status', 1)->get();
        $portfolios = Portfolio::where('status', 1)->get();
        $csrs = CSR::where('status', 1)->get();

        return view('about_us', compact('cto', 'keyPersons', 'mission', 'vision', 'csrs',
            'acheivements', 'portfolios'));
    }

    public function product_detail(Product $product){
        return view('product_detail', compact('product'));
    }

    public function service_detail(Service $service){

        $content = `<div>
                        <div>
                          <h4>`. $service->name .`</h4>
                          <img src="`. asset('/uploads/'.$service->image) .`" alt="power station" class="img-fluid">
                          <p>`. $service->description .`</p>
                        </div>
                    </div>`;
        $header = '<h1>'.$service->name.'</h1>';
        $body = '<img src="'. asset('/uploads/'.$service->image) .'" alt="power station" class="img-fluid"><p>'. $service->description .'</p>';
        return response()->json(["status" => true, "herder" => $header, "body" => $body]);
    }

    public function client(){
        $clients = Client::where('status', 1)->get();
        $capacityTypes = Client::groupBy('type')->having('status', 1)->get();

        return view('clients', compact('clients', 'capacityTypes'));
    }

    public function career(){
        $jobPosts = JobCircular::where('status', 1)->get();
        return view('career', compact('jobPosts'));
    }

    public function job_detail(JobCircular $job){
        return view('job_post', compact('job'));
    }

    public function portfolio(){
        $portfolios = Portfolio::all();

        return view('portfolio', compact('portfolios'));
    }


}
