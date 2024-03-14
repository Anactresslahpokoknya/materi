<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ulasanbuku extends Model
{
    use HasFactory;
    protected $table = 'ulasanbuku';
    protected $primaryKey = 'UlasanID';

    public $incrementing = false;

    public $guarded = [];
}
