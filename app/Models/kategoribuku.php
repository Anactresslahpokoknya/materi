<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kategoribuku extends Model
{
    use HasFactory;
    protected $table = 'kategoribuku';
    protected $primaryKey = 'KategoriID';

    public $incrementing = false;

    public $guarded = [];
}
