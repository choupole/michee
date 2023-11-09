<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Demander extends Model
{
    use HasFactory;

    protected $table = 'demanders';
    protected $primaryKey = 'IdDemande';
    public $timestamps = true;

    protected $fillable = [
        'DatDemande',
        'HeureDemande',
        'IdVisite',
        'NumReq',
    ];

    public function Visite()
    {
        return $this->belongsTo(Visite::class, 'IdVisite', 'IdVisite');
    }

    public function Requerant()
    {
        return $this->belongsTo(Requerant::class, 'NumReq', 'NumReq');
    }

    public function Paiement()
    {
        return $this->hasMany(Paiement::class, 'IdDemande', 'Numpaie');
    }
}
