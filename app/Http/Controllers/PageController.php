<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
     public function index($slug, Request $request) {
         switch ($slug) {
            case 'menu':
               return view('page.menu');
            break; 
            case 'services':
               return view('page.services');
            break; 
            case 'blog':
               return view('page.blog');
            break; 
            case 'detail':
               return view('page.detail');
            break; 
            case 'cart':
               return view('page.cart');
            break; 
            case 'about':
               return view('page.about');
            break; 
            case 'shop':
               return view('page.shop');
            break; 
            case 'checkout':
               return view('page.checkout');
            break;
            case 'contact':
               return view('page.contact');
            break;
            
            default:
            break;
         }
     }
}