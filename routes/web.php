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

Route::get('/', function () {
    return view('admin/login/login');
});
Route::get('index', function () {
    return view('admin/main/main');
})->middleware('adminLogin');
Route::get('login','UserController@getLogin');
Route::post('login','UserController@postLogin');
Route::get('register','UserController@getregister');
Route::post('register','UserController@postregister');
Route::get('logout','UserController@getLogout');
Route::get('profile/{id}','UserController@getProfile');
Route::get('edit/{id}','UserController@getEdit');
Route::post('edit/{id}','UserController@postEdit');
Route::get('forgot','UserController@getForgot');

    Route::group(['prefix' => 'admin','middleware'=>'adminLogin'], function() {
        Route::group(['prefix' => 'user'], function() {
            Route::get('list_user',['as'=>'list_user','uses'=>'UserController@getList']);
            Route::get('add_user',['as'=>'add_user','uses'=>'UserController@getAddUser']);
            Route::post('add_user',['as'=>'add_user','uses'=>'UserController@postAddUser']);
            Route::get('edit_user/{id}','UserController@getEditUser');
            Route::post('edit_user/{id}','UserController@postEditUser');
            Route::get('delete_user/{id}','UserController@DeleteUser');
        });
        Route::group(['prefix' => 'loaisp'], function() {
            Route::get('list_loaisp','LoaiSPController@getList');
            Route::get('add_loaisp','LoaiSPController@getAddLoaiSP');
            Route::post('add_loaisp','LoaiSPController@postAddLoaiSP');
            Route::get('edit_loaisp/{id}','LoaiSPController@getEditLoaiSP');
            Route::post('edit_loaisp/{id}','LoaiSPController@postEditLoaiSP');
            Route::get('delete_loaisp/{id}','LoaiSPController@DeleteLoaiSP');
        });
        Route::group(['prefix' => 'sanpham'], function() {
            Route::get('list_sanpham','SanPhamController@getList');
            Route::get('add_sanpham','SanPhamController@getAddSanPham');
            Route::post('add_sanpham','SanPhamController@postAddSanPham');
            Route::get('edit_sanpham/{id}','SanPhamController@getEditSanPham');
            Route::post('edit_sanpham/{id}','SanPhamController@postEditSanPham');
            Route::get('delete_sanpham/{id}','SanPhamController@DeleteSanPham');
        });
        Route::group(['prefix' => 'hoadon'], function() {
            Route::get('list_choduyet',['as'=>'list_choduyet','uses'=>'HoaDonController@ChoDuyet']);
            Route::get('duyetGH/{id}',['as'=>'duyetGH','uses'=>'HoaDonController@Duyet']);
            Route::get('XoaGH/{id}',['as'=>'XoaGH','uses'=>'HoaDonController@Xoa']);
            Route::get('list_daduyet',['as'=>'list_daduyet','uses'=>'HoaDonController@DaDuyet']);

        });

    });
        Route::group(['prefix' => 'user'], function() {
            Route::group(['prefix' => 'pages'], function() {
                Route::get('index',['as'=>'indexpages','uses'=>'PagesController@index']);
                Route::get('danhmuc/{id}','PagesController@DanhMuc');
                Route::get('chitietsp/{id}','PagesController@ChiTietSP');
                Route::post('timkiem',['as'=>'timkiem','uses'=>'PagesController@TimKiem']);
                Route::get('tkgia/{id}','PagesController@TimKiemGia');
                Route::post('addgiohang/{id}','GioHangController@addGioHang');
                Route::get('giohang/{id}','GioHangController@GioHang');
                Route::get('xoagiohang','GioHangController@XoaGH');
                Route::post('thanhtoan/{id}','GioHangController@ThanhToan');
            });

        });
    Route::get('test',function (){
     $cart=  Cart::getContent();
        $i=0;
        foreach ($cart as $item)
        {

           $i+= $item->quantity;

        }
        return $i;


    });




