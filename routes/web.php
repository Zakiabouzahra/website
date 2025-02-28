<?php

use App\Http\Controllers\Admin\AdminDashbourdController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ClientController;
use App\Http\Controllers\Admin\MessagesController;
use App\Http\Controllers\Admin\PackageController;
use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\Admin\ProjectController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\AppController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\SearchController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect(app()->getLocale());
});

Route::group([
    'prefix' => '{locale}',
    'where' => ['locale' => 'ar|en'],
    'middleware' => 'setlocale',
    ], function () {
        Route::get('/', [AppController::class, 'home'])->name('home');
        Route::get('/home', [AppController::class, 'home']);
        Route::get('/about', [AppController::class, 'about'])->name('about');
        Route::get('/contact', [AppController::class, 'contact'])->name('contact');


        Route::post('/home/contact/store', [AppController::class, 'storeContact'])->name('home.contact.store');
        Route::post('/contact/store', [ContactController::class, 'store'])->name('contact.store');
        Route::get('/services', [AppController::class, 'services'])->name('services');
        Route::get('/services/{id}', [AppController::class, 'serviceDetails'])->name('service.details');

        Route::get('/blog', [AppController::class, 'blog'])->name('blog');
        Route::get('/blog/{id}', [AppController::class, 'showPost'])->name('showPost');
        Route::get('/packages', [AppController::class, 'media'])->name('media');
        Route::get('/projects', [AppController::class, 'projects'])->name('projects');
        Route::get('/search', [SearchController::class, 'search'])->name('search');


    });

    Route::get('/contact/create', [ContactController::class, 'create'])->name('contact.create');

Auth::routes();

Route::middleware('auth', 'auth.admin')->group(function() {

    //ADMIN DASHBOARD


    Route::get('/dashbourd', [AdminDashbourdController::class, 'index'])->name('admin.index');
    // Routes for Projects
    Route::get('/admin/projects', [ProjectController::class, 'index'])->name('admin.projects.index');
    Route::get('/admin/projects/create', [ProjectController::class, 'create'])->name('admin.projects.create');
    Route::post('/admin/projects', [ProjectController::class, 'store'])->name('admin.projects.store');
    Route::get('/admin/projects/{project}/edit', [ProjectController::class, 'edit'])->name('admin.projects.edit');
    Route::put('/admin/projects/{project}', [ProjectController::class, 'update'])->name('admin.projects.update');
    Route::delete('/admin/projects/{project}', [ProjectController::class, 'destroy'])->name('admin.projects.destroy');

    // Routes for Posts
    Route::get('/admin/posts', [PostController::class, 'index'])->name('admin.posts.index');
    Route::get('/admin/posts/create', [PostController::class, 'create'])->name('admin.posts.create');
    Route::post('/admin/posts', [PostController::class, 'store'])->name('admin.posts.store');
    Route::get('/admin/posts/{post}/edit', [PostController::class, 'edit'])->name('admin.posts.edit');
    Route::put('/admin/posts/{post}', [PostController::class, 'update'])->name('admin.posts.update');
    Route::delete('/admin/posts/{post}', [PostController::class, 'destroy'])->name('admin.posts.destroy');

    // Routes for Services
    Route::get('/admin/services', [ServiceController::class, 'index'])->name('admin.services.index');
    Route::get('/admin/services/create', [ServiceController::class, 'create'])->name('admin.services.create');
    Route::post('/admin/services', [ServiceController::class, 'store'])->name('admin.services.store');
    Route::get('/admin/services/{service}/edit', [ServiceController::class, 'edit'])->name('admin.services.edit');
    Route::put('/admin/services/{service}', [ServiceController::class, 'update'])->name('admin.services.update');
    Route::delete('/admin/services/{service}', [ServiceController::class, 'destroy'])->name('admin.services.destroy');

    // Routes for Categories
    Route::get('/admin/categories', [CategoryController::class, 'index'])->name('admin.categories.index');
    Route::get('/admin/categories/create', [CategoryController::class, 'create'])->name('admin.categories.create');
    Route::post('/admin/categories', [CategoryController::class, 'store'])->name('admin.categories.store');
    Route::get('/admin/categories/{category}/edit', [CategoryController::class, 'edit'])->name('admin.categories.edit');
    Route::put('/admin/categories/{category}', [CategoryController::class, 'update'])->name('admin.categories.update');
    Route::delete('/admin/categories/{category}', [CategoryController::class, 'destroy'])->name('admin.categories.destroy');



    // Routes for Clients
    Route::get('/admin/clients', [ClientController::class, 'index'])->name('admin.clients.index');
    Route::get('/admin/clients/create', [ClientController::class, 'create'])->name('admin.clients.create');
    Route::post('/admin/clients', [ClientController::class, 'store'])->name('admin.clients.store');
    Route::get('/admin/clients/{client}/edit', [ClientController::class, 'edit'])->name('admin.clients.edit');
    Route::put('/admin/clients/{client}', [ClientController::class, 'update'])->name('admin.clients.update');
    Route::delete('/admin/clients/{client}', [ClientController::class, 'destroy'])->name('admin.clients.destroy');

    // Routes for Packages
    Route::get('/admin/packages', [PackageController::class, 'index'])->name('admin.packages.index');
    Route::get('/admin/packages/create', [PackageController::class, 'create'])->name('admin.packages.create');
    Route::post('/admin/packages', [PackageController::class, 'store'])->name('admin.packages.store');
    Route::get('/admin/packages/{package}/edit', [PackageController::class, 'edit'])->name('admin.packages.edit');
    Route::put('/admin/packages/{package}', [PackageController::class, 'update'])->name('admin.packages.update');
    Route::delete('/admin/packages/{package}', [PackageController::class, 'destroy'])->name('admin.packages.destroy');




    // Routes for Messages
    Route::get('/admin/messages', [MessagesController::class, 'index'])->name('admin.messages.index');
});
