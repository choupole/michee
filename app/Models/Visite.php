<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Visite extends Model
{
    use HasFactory;
    protected $table = 'visites';
    protected $primaryKey = 'IdVisite';
    public $timestamps = false;

    protected $fillable = [
        'DesignVisite',
        'TypeVisit',
        'IdTarif',
    ];

    public function Tarif()
    {
        return $this->belongsTo(Tarif::class, 'IdTarif', 'IdTarif');
    }

    public function Requerant()
    {
        return $this->belongsToMany(Requerant::class, 'demanders', 'IdVisite', 'NumReq');
    }
}
