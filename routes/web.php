<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaiKhoanController;
use App\Http\Controllers\BaiVietController;
use App\Http\Controllers\ToCaoController;

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

Route::get('tai-khoan/dang-ky',[TaiKhoanController::class,'ShowDangKy'])->name('show-dang-ky')->middleware('guest');
Route::post('tai-khoan/dang-ky',[TaiKhoanController::class,'DangKy'])->name('them-moi-tai-khoan')->middleware('guest');

Route::get('tai-khoan/dang-nhap',[TaiKhoanController::class, 'ShowDangNhap'])->name('show-dang-nhap')->middleware('guest');
Route::post('tai-khoan/dang-nhap',[TaiKhoanController::class, 'XuLyDangNhap'])->name('xu-ly-dang-nhap')->middleware('guest');

Route::get('tai-khoan/logout',[TaiKhoanController::class, 'DangXuat'])->name('logout')->middleware('auth');

Route::get('tai-khoan/profile', [TaiKhoanController::class, 'profile'])->name('profile')->middleware('auth');

Route::get('bai-viet/trang-chu',[BaiVietController::class,'ShowBaiVietTrangChu'])->name('show-trang-chu');

Route::get('bai-viet/thu-cung',[BaiVietController::class,'ShowBaiVietThuCung'])->name('show-thu-cung');

Route::get('bai-viet/nhat-do',[BaiVietController::class,'ShowBaiVietNhatDo'])->name('show-nhat-do');

Route::get('bai-viet/mat-do',[BaiVietController::class,'ShowBaiVietMatDo'])->name('show-mat-do');

Route::get('bai-viet/xe-may',[BaiVietController::class,'ShowBaiVietXe'])->name('show-xe-may');

Route::get('bai-viet/chi-tiet-bai-viet/to-cao/{id}',[ToCaoController::class,'ShowToCao'])->name('show-to-cao');
Route::post('bai-viet/chi-tiet-bai-viet/to-cao/{id}',[ToCaoController::class, 'XuLyBaoCao'])->name('xu-ly-bao-cao');


Route::get('quan-tri/danh-sach-tai-khoan',[TaiKhoanController::class,'DanhSachTaiKhoan'])->name('show-ds-tai-khoan')->middleware('auth');
Route::get('quan-tri/thong-tin-cn',[TaiKhoanController::class,'ShowThongTinCN'])->name('show-ttcn')->middleware('auth');
Route::get('quan-tri/danh-sach-bai-viet-duyet',[BaiVietController::class,'DanhSachBaiVietChoDuyet'])->name('show-ds-bai-viet-duyet')->middleware('auth');
Route::get('quan-tri/danh-sach-bai-viet',[BaiVietController::class,'DanhSachBaiViet'])->name('show-ds-bai-viet')->middleware('auth');

Route::get('quan-tri/danh-sach-tai-khoan/xoa/{id}',[TaiKhoanController::class,'XoaTaiKhoan'])->name('xoa-tai-khoan')->middleware('auth');

Route::get('bai-viet/dang-tin',[BaiVietController::class,'ShowDangTin'])->name('show-dang-tin')->middleware('auth');
Route::post('bai-viet/dang-tin',[BaiVietController::class,'DangBai'])->name('xu-ly-dang-tin')->middleware('auth');

Route::get('bai-viet/chi-tiet-bai-viet/{id}',[BaiVietController::class,'ShowChiTietBaiViet'])->name('show-chi-tiet-bv');


Route::get('quan-tri/danh-sach-bai-viet/xoa/{id}',[BaiVietController::class,'XoaBai'])->name('xoa-bai-viet')->middleware('auth');
Route::get('quan-tri/danh-sach-bai-viet/duyet-bai/{id}',[BaiVietController::class,'DuyetBai'])->name('duyet-bai')->middleware('auth');

Route::get('quan-tri/danh-sach-bai-viet/canh-bao/{id}',[BaiVietController::class,'ShowCanhBao'])->name('show-canh-bao')->middleware('auth');

Route::get('quan-tri/cap-nhat-tai-khoan/{id}',[TaiKhoanController::class,'SuaThongTin']);
Route::post('quan-tri/cap-nhat-tai-khoan/{id}',[TaiKhoanController::class,'XuLyCapNhat'])->name('xu-li-cap-nhat')->middleware('auth');


Route::get('tai-khoan/thong-tin-tai-khoan/{id}',[TaiKhoanController::class,'ThongTinUser'])->name('thong-tin-user')->middleware('auth');
Route::get('tai-khoan/thong-tin-tai-khoan/bai-viet-ca-nhan/{id}',[BaiVietController::class,'XoaBaiCn'])->name('xoa-bai-viet-cn')->middleware('auth');

Route::get('quan-tri/danh-sach-to-cao',[ToCaoController::class,'DanhSachBaiVietToCao'])->name('show-ds-bai-viet-tc')->middleware('auth');

Route::get('quan-tri/danh-sach-to-cao/chi-tiet/{id}',[ToCaoController::class,'ShowCTTC'])->name('show-ct-tc')->middleware('auth');
Route::get('quan-tri/danh-sach-to-cao/chi-tiet/xoa-bv/{id}',[ToCaoController::class,'XoaBaiVietTC'])->name('xoa-bai-viet-tc')->middleware('auth');
Route::get('quan-tri/danh-sach-to-cao/chi-tiet/xoa-bc/{id}',[ToCaoController::class,'XoaBaiTC'])->name('xoa-bai-tc')->middleware('auth');







