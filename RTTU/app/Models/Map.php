<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Map extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'stops';
    protected $primaryKey = 'id';
    protected $fillable = [
        'name',
        'address',
        'lat',
        'lng'
    ];
}
