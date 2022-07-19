<?php

use App\Http\Controllers\CartridgesController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\PartnerController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\SubCategoryController;
use App\Http\Controllers\TechnologyController;
use App\Models\SubCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/login', [UserController::class, 'login'])->name('login');
Route::post('/signin', [UserController::class, 'signin'])->name('signin');
Route::get('/register', [UserController::class, 'register'])->name('register');
Route::post('/signup', [UserController::class, 'signup'])->name('signup');
Route::get('/logout', [UserController::class, 'logout'])->name('logout');
Route::get('/forget-password', [UserController::class, 'forget_password'])->name('forget-password');
Route::post('/reset-password', [UserController::class, 'reset_password'])->name('reset-password');
Route::middleware(['auth'])->group(function () {

    Route::get('/admin/dashboard',[HomeController::class,'index'])->name('admin.dashboard');


    Route::get('/admin/products',[HomeController::class,'products'])->name('admin.products');


    // products starts

    Route::get('/admin/products',[ProductsController::class, 'index'])->name('admin.products');
    Route::get('/admin/products/create',[ProductsController::class, 'create'])->name('admin.products.create');
    Route::post('/admin/products/products-ajax',[ProductsController::class, 'productsAjax'])->name('admin.products.ajax');
    Route::get('/admin/products/status-change',[ProductsController::class, 'statusChange'])->name('admin.products.statuschange');
    Route::get('/admin/products/view/{id}',[ProductsController::class, 'view'])->name('admin.products.view');
    Route::post('/admin/products/store',[ProductsController::class, 'store'])->name('admin.products.store');
    Route::get('/admin/products/edit/{id}',[ProductsController::class, 'edit'])->name('admin.products.edit');
    Route::post('/admin/products/update/{id}',[ProductsController::class, 'update'])->name('admin.products.update');
    Route::get('/admin/products/destroy/{id}',[ProductsController::class, 'destroy'])->name('admin.products.destroy');

    // products ends

    // category starts

    Route::get('/admin/category',[CategoryController::class, 'index'])->name('admin.category');
    Route::get('/admin/category/create',[CategoryController::class, 'create'])->name('admin.category.create');
    Route::post('/admin/category/category-ajax',[CategoryController::class, 'categoryAjax'])->name('admin.category.ajax');
    Route::get('/admin/category/status-change',[CategoryController::class, 'statusChange'])->name('admin.category.statuschange');
    Route::get('/admin/category/view/{id}',[CategoryController::class, 'view'])->name('admin.category.view');
    Route::post('/admin/category/store',[CategoryController::class, 'store'])->name('admin.category.store');
    Route::get('/admin/category/edit/{id}',[CategoryController::class, 'edit'])->name('admin.category.edit');
    Route::post('/admin/category/update/{id}',[CategoryController::class, 'update'])->name('admin.category.update');
    Route::get('/admin/category/destroy/{id}',[CategoryController::class, 'destroy'])->name('admin.category.destroy');

    // category ends

    // sub-category starts

    Route::get('/admin/sub-category',[SubCategoryController::class, 'index'])->name('admin.sub-category');
    Route::get('/admin/sub-category/create',[SubCategoryController::class, 'create'])->name('admin.sub-category.create');
    Route::post('/admin/sub-category/sub-category-ajax',[SubCategoryController::class, 'SubCategoryAjax'])->name('admin.sub-category.ajax');
    Route::get('/admin/sub-category/status-change',[SubCategoryController::class, 'statusChange'])->name('admin.sub-category.statuschange');
    Route::get('/admin/sub-category/view/{id}',[SubCategoryController::class, 'view'])->name('admin.sub-category.view');
    Route::post('/admin/sub-category/store',[SubCategoryController::class, 'store'])->name('admin.sub-category.store');
    Route::get('/admin/sub-category/edit/{id}',[SubCategoryController::class, 'edit'])->name('admin.sub-category.edit');
    Route::post('/admin/sub-category/update/{id}',[SubCategoryController::class, 'update'])->name('admin.sub-category.update');
    Route::get('/admin/sub-category/destroy/{id}',[SubCategoryController::class, 'destroy'])->name('admin.sub-category.destroy');

    // sub-category ends

    // cartridges starts

    Route::get('/admin/cartridges',[CartridgesController::class, 'index'])->name('admin.cartridges');
    Route::get('/admin/cartridges/create',[CartridgesController::class, 'create'])->name('admin.cartridges.create');
    Route::post('/admin/cartridges/cartridges-ajax',[CartridgesController::class, 'cartridgesAjax'])->name('admin.cartridges.ajax');
    Route::get('/admin/cartridges/status-change',[CartridgesController::class, 'statusChange'])->name('admin.cartridges.statuschange');
    Route::get('/admin/cartridges/view/{id}',[CartridgesController::class, 'view'])->name('admin.cartridges.view');
    Route::post('/admin/cartridges/store',[CartridgesController::class, 'store'])->name('admin.cartridges.store');
    Route::get('/admin/cartridges/edit/{id}',[CartridgesController::class, 'edit'])->name('admin.cartridges.edit');
    Route::post('/admin/cartridges/update/{id}',[CartridgesController::class, 'update'])->name('admin.cartridges.update');
    Route::get('/admin/cartridges/destroy/{id}',[CartridgesController::class, 'destroy'])->name('admin.cartridges.destroy');

    // cartridges ends


    // orders starts

    Route::get('/admin/orders',[OrderController::class, 'index'])->name('admin.orders');
    Route::get('/admin/orders/create',[OrderController::class, 'create'])->name('admin.orders.create');
    Route::post('/admin/orders/orders-ajax',[OrderController::class, 'OrderAjax'])->name('admin.orders.ajax');
    Route::get('/admin/orders/status-change',[OrderController::class, 'statusChange'])->name('admin.orders.statuschange');
    Route::get('/admin/orders/view/{id}',[OrderController::class, 'view'])->name('admin.orders.view');
    Route::get('/admin/orders/store',[OrderController::class, 'store'])->name('admin.orders.store');
    Route::get('/admin/orders/edit/{id}',[OrderController::class, 'edit'])->name('admin.orders.edit');
    Route::get('/admin/orders/update/{id}',[OrderController::class, 'update'])->name('admin.orders.update');
    Route::get('/admin/orders/destroy/{id}',[OrderController::class, 'destroy'])->name('admin.orders.destroy');

    // orders ends

    // Technologies starts

    Route::get('/admin/technology',[TechnologyController::class, 'index'])->name('admin.technology');
    Route::get('/admin/technology/create',[TechnologyController::class, 'create'])->name('admin.technology.create');
    Route::post('/admin/technology/technology-ajax',[TechnologyController::class, 'TechnologyAjax'])->name('admin.technology.ajax');
    Route::get('/admin/technology/status-change',[TechnologyController::class, 'statusChange'])->name('admin.technology.statuschange');
    Route::get('/admin/technology/view/{id}',[TechnologyController::class, 'view'])->name('admin.technology.view');
    Route::post('/admin/technology/store',[TechnologyController::class, 'store'])->name('admin.technology.store');
    Route::get('/admin/technology/edit/{id}',[TechnologyController::class, 'edit'])->name('admin.technology.edit');
    Route::get('/admin/technology/update/{id}',[TechnologyController::class, 'update'])->name('admin.technology.update');
    Route::get('/admin/technology/destroy/{id}',[TechnologyController::class, 'destroy'])->name('admin.technology.destroy');

    // Technologies ends


    // Partner starts

    Route::get('/admin/partner',[PartnerController::class, 'index'])->name('admin.partner');
    Route::get('/admin/partner/create',[PartnerController::class, 'create'])->name('admin.partner.create');
    Route::post('/admin/partner/partner-ajax',[PartnerController::class, 'PartnerAjax'])->name('admin.partner.ajax');
    Route::get('/admin/partner/status-change',[PartnerController::class, 'statusChange'])->name('admin.partner.statuschange');
    Route::get('/admin/partner/view/{id}',[PartnerController::class, 'view'])->name('admin.partner.view');
    Route::get('/admin/partner/store',[PartnerController::class, 'store'])->name('admin.partner.store');
    Route::get('/admin/partner/edit/{id}',[PartnerController::class, 'edit'])->name('admin.partner.edit');
    Route::get('/admin/partner/update/{id}',[PartnerController::class, 'update'])->name('admin.partner.update');
    Route::get('/admin/partner/destroy/{id}',[PartnerController::class, 'destroy'])->name('admin.partner.destroy');

    // Partner ends


    // News starts

    Route::get('/admin/news',[NewsController::class, 'index'])->name('admin.news');
    Route::get('/admin/news/create',[NewsController::class, 'create'])->name('admin.news.create');
    Route::post('/admin/news/news-ajax',[NewsController::class, 'NewsAjax'])->name('admin.news.ajax');
    Route::get('/admin/news/status-change',[NewsController::class, 'statusChange'])->name('admin.news.statuschange');
    Route::get('/admin/news/view/{id}',[NewsController::class, 'view'])->name('admin.news.view');
    Route::get('/admin/news/store',[NewsController::class, 'store'])->name('admin.news.store');
    Route::get('/admin/news/edit/{id}',[NewsController::class, 'edit'])->name('admin.news.edit');
    Route::get('/admin/news/update/{id}',[NewsController::class, 'update'])->name('admin.news.update');
    Route::get('/admin/news/destroy/{id}',[NewsController::class, 'destroy'])->name('admin.news.destroy');

    // News ends


    //fetch sub-category-list
    Route::post('/fetch/sub-category',function(Request $request){
            $data = SubCategory::where('status','1')->where('category_id',$request->category_id)->get();
            return response()->json($data);
        })->name('fetch-sub-category');
        
    // Route::get('/admin/cartridges',function(){return view('admin.cartridges');})->name('admin.cartridges');
    // Route::get('/admin/filters',function(){return view('admin.filters');})->name('admin.filters');
    // Route::get('/admin/orders',function(){return view('admin.orders');})->name('admin.orders');

    });

    // frontend 

    Route::get('/', [FrontendController::class,'home'])->name('home');
    Route::get('/about', [FrontendController::class,'about'])->name('about');
    Route::get('/products',[FrontendController::class,'products'])->name('products');
    Route::get('/technologies', [FrontendController::class,'technology'])->name('technologies');
    Route::get('/sectors', [FrontendController::class,'sectors'])->name('sectors');
    Route::get('/partners', [FrontendController::class,'partners'])->name('partners');
    Route::get('/news', [FrontendController::class,'news'])->name('news');
    Route::get('/contact-us', [FrontendController::class,'contact_us'])->name('contact-us');
    Route::get('/sector/{id}', [FrontendController::class,'sector'])->name('sector');
    Route::get('/news/{id}', [FrontendController::class,'news_view'])->name('news-view');
