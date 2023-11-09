<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mode extends Model
{
    use HasFactory;
    protected $table = 'modes';
    protected $primaryKey = 'CodMod';
    public $timestamps = false;

    protected $fillable = [
        'LibMod',
        'Etat',
    ];

    public function Paiement()
    {
        return $this->hasMany(Paiement::class, 'CodMod', 'Numpaie');
    }
}
