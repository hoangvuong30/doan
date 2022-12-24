<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RapChieu extends Model
{
    protected $table = 'RapChieu';
    protected $fillTable = ['MaRapChieu', 'TenRapChieu'];
}
