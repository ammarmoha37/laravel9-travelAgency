<?php

use App\Http\controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminPanel\HomeController as AdminHomeController;
use App\Http\Controllers\AdminPanel\CategoryController as AdminCategoryController;
use App\Http\Controllers\AdminPanel\AdminPackageController;
use App\Http\Controllers\AdminPanel\ImageController;
use App\Http\Controllers\AdminPanel\MessageController;
use App\Http\Controllers\AdminPanel\FaqController;
use App\Http\Controllers\AdminPanel\CommentController;
use App\Http\Controllers\AdminPanel\AdminUserController;
use App\Http\Controllers\AdminPanel\ReservationController;
use App\Http\Controllers\UserController;


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


//1- Do something in the route 


//2- Call view in route

Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::get('/welcome', function () {
    return view('welcome');
});

//3- Call Controller Function

  //******* ADMIN CATEGORY ROUTES *******
Route::get('/', [HomeController::class,'index'])->name('home');
Route::get('/home', [HomeController::class,'index'])->name('home');
Route::get('/about', [HomeController::class,'about'])->name('about');
Route::get('/references', [HomeController::class,'references'])->name('references');
Route::get('/contact', [HomeController::class,'contact'])->name('contact');
Route::post('/storemessage', [HomeController::class,'storemessage'])->name('storemessage');
Route::get('/faq', [HomeController::class,'faq'])->name('faq');
Route::post('/storecomment', [HomeController::class,'storecomment'])->name('storecomment');
Route::view('/loginuser', 'home.login')->name('loginuser');
Route::view('/registeruser', 'home.register')->name('registeruser');
Route::get('/logoutuser', [HomeController::class,'logout'])->name('logoutuser');
Route::view('/loginadmin', 'admin.login')->name('loginadmin');;
Route::post('/loginadmincheck', [HomeController::class,'loginadmincheck'])->name('loginadmincheck');
Route::get('/booking', [HomeController::class,'booking'])->name('booking');
Route::post('/savereservation', [HomeController::class,'savereservation'])->name('savereservation');



//4- Route-> Controller->View

Route::get('/test', [HomeController::class,'test'])->name('test');

//5- Route with parameters
Route::get('/param/{id}/{number}', [HomeController::class,'param'])->name('test');

//6- Route with post 
Route::post('/save', [HomeController::class,'save'])->name('save');

Route::get('/package/{id}', [HomeController::class,'package'])->name('package');
Route::get('/categorypackages/{id}/{slug}', [HomeController::class,'categorypackages'])->name('categorypackages');



Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});


    //******* USER AUTH CONTROL *******

Route::middleware('auth')->group(function(){

        //******* USER PANEL ROUTES *******

        Route::prefix('userpanel')->name('userpanel.')->controller(UserController::class)->group(function(){

            Route::get('/', 'index')->name('index');
            Route::get('/comments', 'comments')->name('comments');
            Route::get('/commentdestroy/{id}', 'commentdestroy')->name('commentdestroy');
            Route::get('/reservations', 'reservations')->name('reservations');

        });


    //******* ADMIN PANEL ROUTES *******

    Route::middleware('admin')->prefix('admin')->name('admin.')->group(function(){

        Route::get('/', [AdminHomeController::class,'index'])->name('index');

            //******* ADMIN GENERAL ROUTES *******
            Route::get('/setting', [AdminHomeController::class,'setting'])->name('setting');
            Route::post('/setting', [AdminHomeController::class,'settingUpdate'])->name('setting.update');

        //******* RESERVATION ROUTES *******
        Route::prefix('/reservation')->name('reservation.')->controller(ReservationController::class)->group(function(){
            Route::get('/', 'index')->name('index');
            Route::get('/show/{id}', 'show')->name('show');
            Route::post('/update/{id}', 'update')->name('update');
            Route::get('/destroy/{id}', 'destroy')->name('destroy');
        });

        //******* ADMIN CATEGORY ROUTES *******
        Route::prefix('/category')->name('category.')->controller(AdminCategoryController::class)->group(function(){
            Route::get('/', 'index')->name('index');
            Route::get('/create', 'create')->name('create');
            Route::post('/store', 'store')->name('store');
            Route::get('/edit/{id}', 'edit')->name('edit');
            Route::post('/update/{id}', 'update')->name('update');
            Route::get('/show/{id}', 'show')->name('show');
            Route::get('/destroy/{id}', 'destroy')->name('destroy');
        });

            //******* ADMIN PACKAGE ROUTES *******
        Route::prefix('/package')->name('package.')->controller(AdminPackageController::class)->group(function(){
            Route::get('/', 'index')->name('index');
            Route::get('/create', 'create')->name('create');
            Route::post('/store', 'store')->name('store');
            Route::get('/edit/{id}', 'edit')->name('edit');
            Route::post('/update/{id}', 'update')->name('update');
            Route::get('/show/{id}', 'show')->name('show');
            Route::get('/destroy/{id}', 'destroy')->name('destroy');
        });

        
            //******* ADMIN PAKAGE IMAGE GALLERY ROUTES *******
            Route::prefix('/image')->name('image.')->controller(ImageController::class)->group(function(){
                Route::get('/{pid}', 'index')->name('index');
                Route::post('/store/{pid}', 'store')->name('store');
                Route::get('/destroy/{pid}/{id}', 'destroy')->name('destroy');
            });
        
        
            //******* ADMIN MESSAGE ROUTES *******
            Route::prefix('/message')->name('message.')->controller(MessageController::class)->group(function(){
                Route::get('/', 'index')->name('index');
                Route::get('/show/{id}', 'show')->name('show');
                Route::post('/update/{id}', 'update')->name('update');
                Route::get('/destroy/{id}', 'destroy')->name('destroy');
            });
        

                    //*******ADMIN FAQ ROUTES *******
        Route::prefix('/faq')->name('faq.')->controller(FaqController::class)->group(function(){
            Route::get('/', 'index')->name('index');
            Route::get('/create', 'create')->name('create');
            Route::post('/store', 'store')->name('store');
            Route::get('/edit/{id}', 'edit')->name('edit');
            Route::post('/update/{id}', 'update')->name('update');
            Route::get('/show/{id}', 'show')->name('show');
            Route::get('/destroy/{id}', 'destroy')->name('destroy');
        });


        
            //******* ADMIN COMMENT ROUTES *******
            Route::prefix('/comment')->name('comment.')->controller(CommentController::class)->group(function(){
                Route::get('/', 'index')->name('index');
                Route::get('/show/{id}', 'show')->name('show');
                Route::post('/update/{id}', 'update')->name('update');
                Route::get('/destroy/{id}', 'destroy')->name('destroy');
            });
        

                
            //******* ADMIN USER ROUTES *******
            Route::prefix('/user')->name('user.')->controller(AdminUserController::class)->group(function(){
                Route::get('/', 'index')->name('index');
                Route::get('/edit/{id}', 'edit')->name('edit');
                Route::get('/show/{id}', 'show')->name('show');
                Route::post('/update/{id}', 'update')->name('update');
                Route::get('/destroy/{id}', 'destroy')->name('destroy');
                Route::post('/addrole/{id}', 'addrole')->name('addrole');
                Route::get('/destroyrole/{uid}/{rid}', 'destroyrole')->name('destroyrole');
            });

    });
});