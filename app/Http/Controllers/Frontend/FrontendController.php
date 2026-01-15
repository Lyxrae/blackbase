<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Facility;
use App\Models\Gallery;
use App\Models\Slideshow;
use App\Models\Service;
use App\Models\MenuCategory;

class FrontendController extends Controller
{
    public function index(){
        $slideshows = Slideshow::latest()->get();
         $galleries = Gallery::latest()->take(6)->get();
         $categories = MenuCategory::with('menus')->latest()->get();
          $services=service::get()->all();
        return view('frontend.index', compact('slideshows','galleries','categories','services'));
        }

        public function contact(){
            return view('frontend.contact');
        }

        public function gallery(){
            $galleries = Gallery::latest()->get();
            return view('frontend.gallery', compact('galleries'));
        }

        public function about(){
            return view('frontend.about');
        }

        public function menu(){
            $categories = MenuCategory::with('menus')->latest()->get();
            return view('frontend.menu', compact('categories'));
        }

           public function service(){
            $services=service::get()->all();
            return view('frontend.service', compact('services'));
        }
}
