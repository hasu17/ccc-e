<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\NewsController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

// Home
Route::get('/', fn() => view('home.index'))->name('home');

// About Page (Main Index Page)
Route::get('/about', [AboutController::class, 'index'])->name('about.index');

// Specific About Pages (Optional if you want them standalone)
Route::get('/about/about_us', fn() => view('about.about_us'))->name('about.about_us');
Route::get('/about/what-we-do', [AboutController::class, 'whatWeDo'])->name('about.what-we-do');
// Route::get('/about/our-members', [AboutController::class, 'ourMembers'])->name('about.members'); // Commented out for now

// News & Events
Route::get('/news-and-events', [NewsController::class, 'index'])->name('news-events.index');

// Main news listing page
Route::get('/news', [NewsController::class, 'index'])->name('news.index');

// Main events listing page
Route::get('/events', [NewsController::class, 'index'])->name('events.index');

// A single news post (This route was commented out)
Route::get('/news/{id}', [NewsController::class, 'show'])->name('news.show');
// Route::get('/', function () {
//     return view('coming-soon');
// });


// Opportunities
Route::get('/opportunities', fn() => view('opportunities.index'));
Route::get('/careers', fn() => view('opportunities.careers'));
Route::get('/volunteer', fn() => view('opportunities.volunteer'));

// Contact Pages
Route::get('/contact_us', fn() => view('contact_us.index'));
Route::get('/test-contact', fn() => view('contact_us.contact'));

Route::get('/contact', [ContactController::class, 'index'])->name('contact.page');
Route::post('/contact', [ContactController::class, 'submit'])->name('contact.submit');
