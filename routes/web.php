<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

// Route::resource('test', 'Nilainki\NilainkiController');

Route::get('/home', 'HomeController@index')->name('home');

// hak akses management user
Route::prefix('/Hak_akses')->group(function(){
    Route::resource('user', 'Hak_akses\UserController');
    Route::resource('akses', 'Hak_akses\AksesUserController');
    Route::resource('levelUser', 'Hak_akses\LevelUserController');
    Route::resource('menu', 'Hak_akses\MenuController');
});
// datatable hak akses 
Route::get('/table/akses', 'Hak_akses\AksesUserController@dataTable')->name('table.akses');
Route::get('/table/menu', 'Hak_akses\MenuController@dataTable')->name('table.menu');
Route::get('/table/levelUser', 'Hak_akses\LevelUserController@dataTable')->name('table.levelUser');
Route::get('/table/user', 'Hak_akses\UserController@dataTable')->name('table.user');
Route::get('/table/nilainki', 'Nilainki\NilainkiController@dataTable')->name('table.nilainki');


//Route Khusus Karyawan
Route::prefix('/karyawan')->group(function (){

    Route::get('/show', 'Karyawan\KaryawanController@index')->name('karyawan');

    Route::get('/add', 'Karyawan\KaryawanController@create');

    Route::post('store', 'Karyawan\KaryawanController@store');

    Route::get('/edit/{id}', 'Karyawan\KaryawanController@edit');

    Route::patch('/update/{id}', 'Karyawan\KaryawanController@update');

    Route::resource('/delete', 'Karyawan\KaryawanController');

    // kariawan pkwt
    Route::get('karyawanPkwt','Karyawan\KaryawanPkwtController@index');
    Route::get('/karyawanPkwt/create', 'Karyawan\KaryawanPkwtController@create')->name('karyawanPkwt.create');
    Route::post('karyawanPkwt', 'Karyawan\KaryawanPkwtController@store')->name('karyawanPkwt.store');
    Route::get('/karyawanPkwt/{id}', 'Karyawan\KaryawanPkwtController@show')->name('karyawanPkwt.show');
    Route::get('/karyawanPkwt/{id}/edit', 'Karyawan\KaryawanPkwtController@edit')->name('karyawanPkwt.edit');
    Route::delete('/karyawanPkwt/{id}','Karyawan\KaryawanPkwtController@destroy')->name('karyawanPkwt.destroy');
});
Route::resource('PenugasanPkwt', 'Pkwt\PenugasanPkwtController');
Route::resource('karyawanPkwt', 'Karyawan\KaryawanPkwtController');

//Manajement SDM
Route::prefix('add')->group(function (){

    // Route::get('/jabatan', 'Menej_sdm\Jabatan\JabatanController@create');
    Route::get('/pangkat', 'Menej_sdm\Pangkat\PangkatController@create');
    Route::get('/unit', 'Menej_sdm\Unit\UnitController@create');
    Route::get('/level', 'Menej_sdm\level\LevelController@create')->name('add/level.create');
    Route::get('/grade_jabatan', 'Menej_sdm\GradeJabatan\GradeJabatanController@create');

});

Route::prefix('edit')->group(function (){
    
    // Route::get('/jabatan/{jabatan}', 'Menej_sdm\Jabatan\JabatanController@edit');
    Route::get('/unit/{unit}', 'Menej_sdm\Unit\UnitController@edit');
    Route::get('/level/{level}', 'Menej_sdm\level\LevelController@edit');
    Route::get('/grade_jabatan/{gradejabatan}', 'Menej_sdm\GradeJabatan\GradeJabatanController@edit');
    Route::get('/pangkat/{pangkat}', 'Menej_sdm\Pangkat\PangkatController@edit');

});

Route::prefix('update')->group(function (){

    // Route::patch('/jabatan/{jabatan}', 'Menej_sdm\Jabatan\JabatanController@update');
    Route::patch('/pangkat/{pangkat}', 'Menej_sdm\Pangkat\PangkatController@update');
    Route::patch('/unit/{unit}', 'Menej_sdm\Unit\UnitController@update');
    Route::patch('/level/{level}', 'Menej_sdm\level\LevelController@update');
    Route::patch('/grade_jabatan/{gradejabatan}', 'Menej_sdm\GradeJabatan\GradeJabatanController@update');
    
});

// penilaian karyawan
Route::resource('penilaianKaryawan', 'Grade\GradeKaryawanController');
Route::get('penilaianKaryawan', 'Grade\GradeKaryawanController@index');
Route::get('penilaianKaryawan/edit/{id}', 'Grade\GradeKaryawanController@edit');
Route::get('penilaianKaryawan/create/', 'Grade\GradeKaryawanController@create');
Route::post('gradeKryawan/post','Grade\GradeKaryawanController@store');
Route::patch('penilaianUpdate/{id}', 'Grade\GradeKaryawanController@update');
Route::get('penilaian/{id}','Grade\GradeKaryawanController@getName')->name('penilaian');
Route::delete('penilaianKaryawan/{id}', 'Grade\GradeKaryawanController@destroy');

// Nilai Nki
Route::resource('nilainki', 'Nilainki\NilainkiController');

// cuti
Route::resource('cuti', 'Cuti\CutiController');


Route::resource('pangkat', 'Menej_sdm\Pangkat\PangkatController');
Route::post('save-pangkat', 'Menej_sdm\Pangkat\PangkatController@store');


Route::resource('unit', 'Menej_sdm\Unit\UnitController');
Route::post('save-unit', 'Menej_sdm\Unit\UnitController@store');
Route::delete('unit/{unit}', 'Menej_sdm\Unit\UnitController@destroy');


Route::resource('level', 'Menej_sdm\level\LevelController');
Route::post('save-level', 'Menej_sdm\level\LevelController@store');
Route::delete('level/{level}', 'Menej_sdm\level\LevelController@destroy');

Route::resource('grade_jabatan', 'Menej_sdm\GradeJabatan\GradeJabatanController');
Route::post('save-grade-jabatan', 'Menej_sdm\GradeJabatan\GradeJabatanController@store');
Route::delete('gradejabatan/{gradejabatan}', 'Menej_sdm\GradeJabatan\GradeJabatanController@destroy');

// route graafik
Route::get('/grafikLevel/{id}', 'grafikBatang\GrafikBatangController@index');
Route::get('grafikJabatan/{id}', 'GrafikBatang\GrafikJabatanController@index');
Route::get('/grafikPangkat/{id}', 'GrafikBatang\GrafikPangkatController@index');
Route::resource('grafikPkwt', 'GrafikBatang\GrafikPkwtController');
Route::resource('grafikPhie', 'grafikPhie\GrafikPhieController');
// /route graafik

Route::resource('promosi', 'Promosi\PromosiController');
Route::resource('pensiun', 'Pensiun\PensiunController');

// master data 
Route::resource('level', 'Menej_sdm\level\LevelController');
Route::resource('jabatan', 'MasterData\JabatanController');

 // Datatables 
Route::get('/table/karyawanpkwt', 'Karyawan\KaryawanPkwtController@dataTable')->name('table.karyawanpkwt');
Route::get('/table/level', 'Menej_sdm\level\LevelController@dataTable')->name('table.level');
Route::get('/table/jabatan', 'MasterData\JabatanController@dataTable')->name('table.jabatan');

