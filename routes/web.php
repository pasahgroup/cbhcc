<?php
use App\Http\Controllers\AboutusController;
use App\Http\Controllers\ActivityController;
use App\Http\Controllers\SubprojectController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\SlidesController;
use App\Http\Controllers\DonorController;
use App\Http\Controllers\BankController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\WebsiteController;

use Illuminate\Support\Facades\Route;


// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/adminl', function () {
    return view('spa.admin_panel');
});


Route::resource('/',WebsiteController::class);

Route::resource('/bank',BankController::class);

Route::get('/bank2', [BankController::class,'index']);
Route::get('/bank3', [BankController::class, 'index'])->name('bank.bank3');

Route::get('/donate', [WebsiteController::class,'donate']);
Route::get('/safari', [websiteController::class, 'safari'])->name('donate.safari');
Route::get('/drisela', [websiteController::class, 'drisela'])->name('donate.drisela');
Route::get('/form', [WebsiteController::class, 'form']);
//Route::get('/project', [ProjectController::class, 'index'])->name('project');


Route::get('/get_donor', [DonorController::class,'donor']);
Route::get('/get_slides', [SlidesController::class,'slides']);
Route::get('/get_contact', [ContactController::class,'contact']);


//Route::post('/donor', [DonorController::class,'store']);

Route::resource('/donor',DonorController::class);
Route::resource('/contact',ContactController::class);
Route::resource('/project',ProjectController::class);
Route::resource('/subproject',SubprojectController::class);
Route::resource('/activity',ActivityController::class);


Route::resource('/slides',SlidesController::class);
// Route::get('/getSlides/{id}', [SlidesController::class, 'getSlides']);

// Route::get('/register_slide', [SlidesController::class, 'getSlides']);
Route::get('/register_slide', [SlidesController::class,'show'])->name('register_slide');
Route::get('/edit_slide', [SlidesController::class,'edit'])->name('edit_slide');

Route::get('/getSlides/{id}', [SlidesController::class, 'getSlides']);
 Route::get('/slide-destroy/{x}', [SlidesController::class, 'destroy'])->name('destroy');


Route::get('/get_aboutusw', [WebsiteController::class,'aboutusw']);
Route::resource('/aboutus',AboutusController::class);
 
  Route::get('/aboutus-destroy/{x}', [AboutusController::class, 'destroy'])->name('destroy');
  Route::get('/project-destroy/{x}', [ProjectController::class, 'destroy'])->name('destroy');
  Route::get('/subproject-destroy/{x}', [SubprojectController::class, 'destroy'])->name('destroy');

    Route::get('/activity-destroy/{x}', [ActivityController::class, 'destroy'])->name('destroy');

//Route::get('/bank1',[BankController::class,'emailSendF'])->name('email-send');

// Route::post('/item',ItemController::class);
// Route::put('/item',ItemController::class);
// Route::putch('/item',ItemController::class);

Route::resource('/item',ItemController::class);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
