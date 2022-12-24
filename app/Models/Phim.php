<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Phim extends Model
{
    protected $table = 'KhachHang';
    protected $fillTable = ['MaPhim', 'TheLoaiPhim', 'TenPhim', 'ThoiLuong', 'NgayCongChieu', 'DienVien', 'QuocGia', 'NSX', 'TomTat', 'TrangThaiPhim', 'Trailer'];
}
