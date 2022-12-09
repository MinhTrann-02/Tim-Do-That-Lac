<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BaiViet extends Model
{
    use HasFactory;
    protected $table = 'bai_viet';
    protected $fillable = ['nguoi_dung_id','ten_nguoi_dung','tieu_de','noi_dung','tag','vi_tri','hinh_anh_1','hinh_anh_2','hinh_anh_3','hinh_anh_4','hinh_anh_5','muc_do', 'trang_thai'];

    public function BaiViet(){
        return $this->belongsto(BaiViet::class);
    }
}
