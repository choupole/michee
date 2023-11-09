<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Poster extends Model
{
    use HasFactory;
    protected $table = 'posters';
    protected $primaryKey = 'NumProp';
    public $timestamps = true;
    protected $guarded = [];

    protected $fillable = [
        'DatePoste',
        'Emplacement',
        'Caracteristiques',
        'Details',
        'IdResp',
        'NumProp',
    ];

    public function Responsable()
    {
        return $this->belongsTo(Responsable::class, 'IdResp', 'IdResp');
    }

    public function Propriete()
    {
        return $this->belongsTo(Propriete::class, 'NumProp', 'NumProp');
    }
}
