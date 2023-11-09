<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Paiement extends Model
{
    use HasFactory;
    protected $table = 'paiements';
    protected $primaryKey = 'Numpaie';
    public $timestamps = false;
    protected $fillable = [
        'Montpaie',
        'DatPaie',
        'IdDemande',
        'CodMod',
    ];

    public function Demander()
    {
        return $this->belongsTo(Demander::class, 'IdDemande', 'IdDemande');
    }

    public function Mode()
    {
        return $this->belongsTo(Mode::class, 'CodMod', 'CodMod');
    }
}
