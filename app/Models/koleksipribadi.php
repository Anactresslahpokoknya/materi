<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class koleksipribadi extends Model
{
    use HasFactory;
    protected $table = 'koleksipribadi';
    protected $primaryKey = 'KoleksiID';

    public $incrementing = false;

    public $guarded = [];
}
