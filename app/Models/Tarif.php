<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tarif extends Model
{
    use HasFactory;
    protected $table = 'tarifs';
    protected $primaryKey = 'IdTarif';
    public $timestamps = false;

    protected $fillable = [
        'DesignTarif',
        'Montant',
    ];

    public function Visite()
    {
        return $this->hasMany(Visite::class, 'IdTarif', 'IdVisite');
    }
}
