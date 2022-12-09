<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ToCao extends Model
{
    use HasFactory;
    protected $table = 'to_cao';
    protected $fillable = ['nguoi_to_cao_id','bai_viet_to_cao_id','tieu_de','noi_dung'];
    public function ToCao(){
        return $this->belongsto(ToCao::class);
    }
}
