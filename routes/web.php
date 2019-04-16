<?php

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

Route::get('/', 'HomeController@index')->name('home');

Auth::routes();
// Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->name('home');


// ADMIN
Route::group(['prefix' => 'akrom', 'middleware' => ['admin', 'auth']], function(){
	Route::resource('/', 'AdminController');
});


// LOGIN



// ADMINCONTROLLER
// Siswa
Route::get('/calonsiswa', 'AdminController@calonsiswa')->name('calonsiswa');
Route::get('/tambah', 'AdminController@tambah')->name('tambah')->middleware('admin');
Route::post('/tambah', 'AdminController@create')->name('create')->middleware('admin');
Route::get('/{id}/edit', 'AdminController@edit')->name('edit')->middleware('admin');
Route::post('/{id}/update', 'AdminController@update')->name('update')->middleware('admin');
Route::get('/{id}/delete', 'AdminController@delete')->name('delete')->middleware('admin');
Route::get('/{id}/detail', 'AdminController@detail')->name('detail')->middleware('admin');

// PROFIL
Route::get('/VisiMisi', 'HomeController@visimisi')->name('visimisi');
Route::get('/KepalaSekolah', 'HomeController@kepalasekolah')->name('kepalasekolah');
Route::get('/sejarah', 'HomeController@sejarah')->name('sejarah');

// POSTNEWSCONTROLLER
Route::get('/kegiatan', 'PostNewsController@kegiatan')->name('kegiatan');
Route::get('/postNews', 'PostNewsController@tambah')->name('newstambah')->middleware('admin');
Route::post('/postNews', 'PostNewsController@create')->name('newscreate')->middleware('admin');
Route::get('/detailnews/{judul}', 'PostNewsController@detail')->name('detailnews');
Route::get('/{id}/editnews', 'PostNewsController@edit')->name('editnews')->middleware('admin');
Route::post('/{id}/updatenews', 'PostNewsController@update')->name('updatenews')->middleware('admin');
Route::get('/{id}/delete', 'PostNewsController@delete')->name('deletenews')->middleware('admin');


// PROGRAM UNGGULAN
Route::get('/program', 'ProgramController@program')->name('program');
Route::get('/program-unggulan', 'ProgramController@tambah')->name('programtambah')->middleware('admin');
Route::post('/program-unggulan', 'ProgramController@create')->name('programcreate')->middleware('admin');
Route::get('/detailprogram/{nama}', 'ProgramController@detail')->name('detailprogram');
Route::get('/{id}/editprogram', 'ProgramController@edit')->name('editprogram')->middleware('admin');
Route::post('/{id}/updateprogram', 'ProgramController@update')->name('updateprogram')->middleware('admin');
Route::get('/{id}/deleteprogram', 'ProgramController@delete')->name('deleteprogram')->middleware('admin');


// PENGUMUMAN
Route::get('/pengumuman', 'PengumumanController@index')->name('pengumuman')->middleware('admin');
Route::get('/tambahpengumuman', 'PengumumanController@tambah')->name('pengumumantambah')->middleware('admin');
Route::post('/tambahpengumuman', 'PengumumanController@create')->name('pengumumancreate')->middleware('admin');
Route::get('/{id}/editpengumuman', 'PengumumanController@edit')->name('pengumumanedit')->middleware('admin');
Route::post('/{id}/updatepengumuman', 'PengumumanController@update')->name('pengumumanupdate')->middleware('admin');
Route::get('/detailpengumuman/{judul}', 'PengumumanController@detail')->name('pengumumandetail');
Route::get('/{id}/hapuspengumuman', 'PengumumanController@delete')->name('pengumumandelete')->middleware('admin');

// GURU KARYAWAN
Route::get('/gurukaryawanadmin', 'GuruSiswaController@index')->name('gurusiswa')->middleware('admin');
Route::get('/gurukaryawan', 'GuruSiswaController@gurukaryawan')->name('gurukaryawan');
Route::get('/guru/tambah', 'GuruController@tambah')->name('gurutambah')->middleware('admin');
Route::post('/guru/tambah', 'GuruController@create')->name('gurucreate')->middleware('admin');
Route::get('/{id}/editguru', 'GuruController@edit')->name('editguru')->middleware('admin');
Route::post('/{id}/updateguru', 'GuruController@update')->name('updateguru')->middleware('admin');
Route::get('/{id}/hapusguru', 'GuruController@delete')->name('hapusguru')->middleware('admin');





Route::get('/detailgurukaryawan/{nama}', 'GuruSiswaController@detail')->name('detailgurukaryawan');














// Route::get('/showallguru', 'GuruSiswaController@showallguru')->name('showallguru');
// Route::get('/showallsiswa', 'GuruSiswaController@showallsiswa')->name('showallsiswa');

// SISWA
// Route::get('/siswa', 'SiswaController@index')->name('siswa');
// Route::get('/siswa/tambah', 'SiswaController@tambah')->name('siswatambah');
// Route::post('/siswa/tambah', 'SiswaController@create')->name('siswacreate');
// Route::get('/{id}/editsiswa', 'SiswaController@edit')->name('editsiswa');
// Route::post('/{id}/updatesiswa', 'SiswaController@update')->name('updatesiswa');
// Route::get('/{id}/hapussiswa', 'SiswaController@delete')->name('hapussiswa');






// HOMECONTROLLER
Route::get('/usertambah', 'HomeController@tambah')->name('usertambah');
Route::post('/usertambah', 'HomeController@create')->name('usercreate');



// JURUSAN
Route::get('rpl', 'HomeController@rpl')->name('rpl');
Route::get('tkr', 'HomeController@tkr')->name('tkr');
Route::get('pbs', 'HomeController@pbs')->name('pbs');
Route::get('pht', 'HomeController@pht')->name('pht');





