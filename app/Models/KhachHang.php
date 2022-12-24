<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KhachHang extends Model
{
    protected $table = 'KhachHang';
    protected $fillTable = ['MaKhachHang', 'TenKhachHang', 'MatKhau', 'SDT', 'DiaChi', 'NgaySinh', 'GioiTinh', 'CMND'];
    protected $hidden = [
        'MatKhau'
    ];
}
