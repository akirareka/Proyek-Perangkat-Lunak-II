<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class routes extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'routes';
    protected $primaryKey = 'id';
    protected $fillable = [
        'start',
        'stop',
        'distance',
        'price'
    ];
}
