<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SuatChieu extends Model
{
    protected $table = 'SuatChieu';
    protected $fillTable = ['MaSuatChieu', 'GioBatDau', 'GioKetThuc', 'NgayChieu', 'MaPhongChieu', 'MaPhim', 'MaRap'];
}
