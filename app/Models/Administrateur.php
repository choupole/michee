<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Administrateur extends Model
{
    use HasFactory;
    protected $table = 'administrateurs';
    protected $primaryKey = 'IdAdmin';
    protected $fillable = [
        'Date',
    ];
    public $timestamps = false;
}
