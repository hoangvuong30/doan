<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PhongChieu extends Model
{
    protected $table = 'PhongChieu';
    protected $fillTable = ['MaPhongChieu', 'TenPhongChieu', 'MaRapCheiu'];
}
