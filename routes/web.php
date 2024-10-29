<?php

use App\Livewire\BlogDetail;
use App\Livewire\PackageDetail;
use App\Livewire\ShowAboutUs;
use App\Livewire\ShowBlog;
use App\Livewire\ShowContactUs;
use App\Livewire\ShowGallery;
use App\Livewire\ShowHome;
use App\Livewire\ShowPackages;
use App\Livewire\ShowServicePage;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

route::get('/', ShowHome::class)->name('home');
route::get('/services', ShowServicePage::class)->name('servicePage');
route::get('/blog', ShowBlog::class)->name('blog');
route::get('/blog/{slug}', BlogDetail::class)->name('blogDetail');
route::get('/about-us', ShowAboutUs::class)->name('aboutUs');
route::get('/contact-us', ShowContactUs::class)->name('contactUs');
route::get('/packages', ShowPackages::class)->name('packages');
route::get('/packagedetail/{slug}', PackageDetail::class)->name('packagedetail');
route::get('/gallery', ShowGallery::class)->name('gallery');
