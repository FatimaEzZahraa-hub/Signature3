<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DocumentController;
use App\Http\Controllers\SignataireController;
use App\Http\Controllers\ParapheurController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\InboxController;
use App\Http\Controllers\LegalController;
use App\Http\Controllers\ContactMessageController;
use App\Http\Controllers\SupportController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

/*
|--------------------------------------------------------------------------
| Authentification
|--------------------------------------------------------------------------
*/
Auth::routes();

// Connexion personnalisée
Route::get('/connexion', [LoginController::class, 'showLoginForm'])->name('connexion');
Route::post('/connexion', [LoginController::class, 'login']);

/*
|--------------------------------------------------------------------------
| Accueil public
|--------------------------------------------------------------------------
*/
Route::get('/', fn() => view('accueil'));

/*
|--------------------------------------------------------------------------
| Routes protégées (utilisateur connecté)
|--------------------------------------------------------------------------
*/
Route::middleware(['auth'])->group(function () {

    // Dashboard
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    // Profil utilisateur
    Route::get('/profile', [UserController::class, 'showProfile'])->name('profile');
    Route::get('/account', [UserController::class, 'showAccount'])->name('account');
    Route::put('/account', [UserController::class, 'updateAccount'])->name('account.update');
    Route::post('/upload-photo', [UserController::class, 'uploadPhoto'])->name('account.uploadPhoto');

    // Documents (CRUD + download/voir)
    Route::resource('documents', DocumentController::class);
    Route::get('/documents/{document}/download', [DocumentController::class, 'download'])->name('documents.download');
    Route::get('/documents/{document}/voir', [DocumentController::class, 'voir'])->name('documents.voir');

    // Signataires (CRUD)
    Route::resource('signataires', SignataireController::class);

    // Parapheurs (Many-to-Many)
    Route::get('/parapheur', [ParapheurController::class, 'index'])->name('parapheur.index');  // Ajout de cette ligne
    Route::resource('parapheur', ParapheurController::class);
    // Routes pour ajouter et retirer des documents à un parapheur
    Route::post('/parapheur/{parapheur}/document', [ParapheurController::class, 'addDocument'])
        ->name('parapheur.document.add');
    Route::delete('/parapheur/{parapheur}/document/{document}', [ParapheurController::class, 'removeDocument'])
        ->name('parapheur.document.remove');
    Route::post('/parapheur/{parapheur}/add-document', [ParapheurController::class, 'addDocument'])->name('parapheur.addDocument');

    // Contacts (CRUD)
    Route::resource('contacts', ContactController::class);

    // Inbox & actions de signature
    Route::get('/inbox', [InboxController::class, 'index'])->name('inbox.index');
    Route::post('/documents/{document}/sign', [InboxController::class, 'sign'])->name('documents.sign');
    Route::post('/documents/{document}/reject', [InboxController::class, 'reject'])->name('documents.reject');
});

/*
|--------------------------------------------------------------------------
| Administration (seulement role administrateur)
|--------------------------------------------------------------------------
*/
Route::middleware(['auth', 'role:administrateur'])
     ->prefix('admin')->name('admin.')
     ->group(function () {
    Route::resource('users', \App\Http\Controllers\Admin\UserManagementController::class)
         ->except(['edit', 'update']);
});

/*
|--------------------------------------------------------------------------
| Déconnexion
|--------------------------------------------------------------------------
*/
Route::post('/logout', function () {
    Auth::logout();
    return redirect('/');
})->name('logout');

// Routes pour les pages légales
Route::get('/conditions-utilisation', [LegalController::class, 'conditions'])->name('legal.conditions');
Route::get('/politique-confidentialite', [LegalController::class, 'confidentialite'])->name('legal.confidentialite');
Route::get('/mentions-legales', [LegalController::class, 'mentions'])->name('legal.mentions');

// Routes pour les pages d'aide et contact
Route::get('/faq', function () {
    return view('faq');
})->name('faq');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::post('/contact', [ContactMessageController::class, 'store'])->name('contact.store');

// Route pour la page d'aide
Route::get('/aide', function () {
    return view('aide');
})->name('aide');

Route::get('/help', function () {
    return view('help');
})->name('help')->middleware('auth');

Route::get('/support', function () {
    return view('support');
})->name('support')->middleware('auth');

Route::post('/support', [SupportController::class, 'submit'])->name('support.submit')->middleware('auth');

