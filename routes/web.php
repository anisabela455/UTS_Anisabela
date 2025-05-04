<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AkunController;
use App\Http\Controllers\Detail_jurnalController;
use App\Http\Controllers\DjurnalController;
use App\Http\Controllers\Header_jurnalController;
use App\Http\Controllers\Jurnal_manualController;
use App\Http\Controllers\Kelompok_akunController;
use App\Http\Controllers\LaporanController;
use App\Http\Controllers\Laporan_detailController;
use App\Http\Controllers\Laporan_saldoController;
use App\Http\Controllers\Laporan_saldo_detailController;
use App\Http\Controllers\Laporan_transaksiController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\PengaturanController;
use App\Http\Controllers\PermissionController;
use App\Http\Controllers\RolesController;
use App\Http\Controllers\TransaksiController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\HjurnalController;
use App\Http\Controllers\KelompokController;
use App\Http\Controllers\PerkiraanController;
use App\Http\Controllers\TabelAkuntansiHistoryBackupController;
use App\Http\Controllers\TabelAkuntansiHistoryTutupBukuController;
use App\Http\Controllers\TabelAkuntansiJurnalKeluarController;
use App\Http\Controllers\TabelAkuntansiJurnalMasukController;
use App\Http\Controllers\TabelAkuntansiJurnalUmumController;
use App\Http\Controllers\TabelAkuntansiMasterController;
use App\Http\Controllers\TabelAkuntansiTransaksiController;
use App\Http\Controllers\TabelIndukUserController;
use App\Http\Controllers\SetupGlPeriodeController;
use App\Http\Controllers\TabelSetupGlPerkiraanController;
use App\Http\Controllers\TPeriodeController;
use App\Http\Controllers\TPerkiraanController;
use App\Http\Controllers\TUserController;
use App\Models\TUser;





// Routenya
Route::resource('akun', AkunController::class);
Route::resource('detail_jurnal', Detail_jurnalController::class);
Route::resource('djurnal', DjurnalController::class);
Route::resource('header_jurnal', Header_jurnalController::class);
Route::resource('jurnal_manual', Jurnal_manualController::class);
Route::resource('kelompok_akun', Kelompok_akunController::class);
Route::resource('laporan', LaporanController::class);
Route::resource('laporan_detail', Laporan_detailController::class);
Route::resource('laporan_saldo', Laporan_saldoController::class);
Route::resource('laporan_saldo_detail', Laporan_saldo_detailController::class);
Route::resource('laporan_transaksi', Laporan_transaksiController::class);
Route::resource('menu', MenuController::class);
Route::resource('pengaturan', PengaturanController::class);
Route::resource('permission', PermissionController::class);
Route::resource('roles', RolesController::class);
Route::resource('transaksi', TransaksiController::class);
Route::resource('users', UserController::class);
Route::resource('hjurnal', HjurnalController::class)->only(['index']);
Route::resource('kelompok', KelompokController::class);
Route::resource('perkiraan', PerkiraanController::class);
Route::resource('tabel_akuntansi_history_backup', TabelAkuntansiHistoryBackupController::class);
Route::resource('tutupbuku', TabelAkuntansiHistoryTutupBukuController::class);
Route::resource('jurnal_keluar', TabelAkuntansiJurnalKeluarController::class);
Route::resource('jurnal_masuk', TabelAkuntansiJurnalMasukController::class);
Route::resource('jurnalumum', TabelAkuntansiJurnalUmumController::class);
Route::resource('tabel_akuntansi_master', TabelAkuntansiMasterController::class);
Route::resource('tabel_akuntansi_transaksi', TabelAkuntansiTransaksiController::class);
Route::resource('tabel_induk_user',TabelIndukUserController::class);
Route::resource('setup_gl_periode', SetupGlPeriodeController::class);
Route::resource('tabel-setup-gl-perkiraan', TabelSetupGlPerkiraanController::class);
Route::resource('t-periode', TPeriodeController::class);
Route::resource('t_perkiraan', TPerkiraanController::class);
Route::resource('t_user', TUserController::class);
Route::get('/', function () {
    return view('home');
});
