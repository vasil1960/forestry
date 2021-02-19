<?php

use App\Http\Controllers\Pages\IssueController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Pages\PagesController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Contact\ContactController;
use App\Http\Controllers\Pages\ArticleIssueController;

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/', [PagesController::class, 'homepage'])->name('pages.home');
Route::get('/contents', [PagesController::class, 'contents'])->name('pages.contents');
Route::get('/news',     [PagesController::class, 'news'])->name('pages.news');
Route::get('/issue/{id}', [PagesController::class, 'issue'])->name('pages.issue');
Route::get('/instructions', [PagesController::class, 'instructions'])->name('pages.instructions');
Route::get('/subscription', [PagesController::class, 'subscription'])->name('pages.subscription');
// Route::get('/contacts', [PagesController::class, 'contacts'])->name('pages.contacts');
Route::get('/conferences', [PagesController::class, 'conferences'])->name('pages.conferences');
Route::get('/publication', [PagesController::class, 'publication'])->name('pages.publication');

Route::get('/issue/{id}/search', [PagesController::class, 'searchIssue'])->name('issue.search');

Route::get('/contact-form', [ContactController::class, 'contactForm'])->name('contact-form');

Route::get('/issue/{id}/edit', [ArticleIssueController::class, 'edit'])->name('issue.edit');
Route::post('/issue/{id}/edit', [ArticleIssueController::class, 'update'])->name('issue.update');
