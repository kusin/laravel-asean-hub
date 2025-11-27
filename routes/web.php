<?php

# Controller Halaman Backend
use App\Http\Controllers\Backend\DashboardController as DashboardBackend;
use App\Http\Controllers\Backend\JudgesController as JudgesBackend;
use App\Http\Controllers\Backend\ParticipantsController as ParticipantsBackend;
use App\Http\Controllers\Backend\VotersController as VotersBackend;
use App\Http\Controllers\Backend\UrbanDesignController as UrbanDesignBackend;

# Controller Halaman Frontend
# ---

# Other
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

# ------------------------------------------------------------------------------------------------- #
# Route Halaman Backend - Admin ------------------------------------------------------------------- #
# ------------------------------------------------------------------------------------------------- #
Route::get('/admin/dashboard', [DashboardBackend::class, 'showAdmin'])->name('admin.dashboard');
Route::controller(JudgesBackend::class)->group(function () {
    Route::get('/admin/judges', 'index')->name('admin.judges.index');
    Route::get('/admin/judges/show', 'show')->name('admin.judges.show');
    Route::get('/admin/judges/create', 'create')->name('admin.judges.create');
    Route::get('/admin/judges/edit', 'edit')->name('admin.judges.edit');
});
Route::controller(ParticipantsBackend::class)->group(function () {
    Route::get('/admin/participants', 'index')->name('admin.participants.index');
    Route::get('/admin/participants/show', 'show')->name('admin.participants.show');
    Route::get('/admin/participants/create', 'create')->name('admin.participants.create');
    Route::get('/admin/participants/edit', 'edit')->name('admin.participants.edit');
});
Route::controller(VotersBackend::class)->group(function () {
    Route::get('/admin/voters', 'index')->name('admin.voters.index');
});
Route::controller(UrbanDesignBackend::class)->group(function () {
    Route::get('/admin/urban-design', 'index')->name('admin.urban-design.index');
});

# ------------------------------------------------------------------------------------------------- #
# Route Halaman Backend - Judges ------------------------------------------------------------------ #
# ------------------------------------------------------------------------------------------------- #
Route::get('/judges/dashboard', [DashboardBackend::class, 'showJudges'])->name('judges.dashboard');


# ------------------------------------------------------------------------------------------------- #
# Route Halaman Backend - Participants ------------------------------------------------------------ #
# ------------------------------------------------------------------------------------------------- #
Route::get('/participants/dashboard', [DashboardBackend::class, 'showParticipants'])->name('participants.dashboard');
Route::get('/participants/update-profile', [ParticipantsBackend::class, 'updateProfile'])->name('participants.update-profile');
Route::get('/participants/urban-design/show', [ParticipantsBackend::class, 'showUrbanDesign'])->name('participants.urban-design.show');
Route::get('/participants/urban-design/create', [ParticipantsBackend::class, 'createUrbanDesign'])->name('participants.urban-design.create');
Route::get('/participants/assessment', [ParticipantsBackend::class, 'showAssessment'])->name('participants.assessment');
