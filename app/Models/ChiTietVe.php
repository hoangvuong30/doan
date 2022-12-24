<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ChiTietVe extends Model
{
    protected $table = 'ChiTietVe';
    protected $fillTable = ['MaChiTietVe', 'NgayBan', 'ThanhTien', 'MaSuatChieu', 'MaGhe', 'MaKhachHang'];
}
