<?php

namespace App\Models;

use Illuminate\Database\DBAL\TimestampType;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class yug extends Model
{
    public $table='yug';
    public $timestamps=true;
    protected $fillable = ['email', 'password'];
    use HasFactory;
}
asdasds