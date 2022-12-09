<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;

class TaiKhoan extends Authenticatable
{
    use HasFactory;
    use SoftDeletes;
    
    protected $table = 'tai_khoan';
    protected $fillable = ['ho_ten','so_dien_thoai','email', 'ten_dang_nhap', 'mat_khau', 'avatar', 'adm', 'status'];

    public function getPasswordAttribute(){
        return $this->mat_khau;
    }
}
