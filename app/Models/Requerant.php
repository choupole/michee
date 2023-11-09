<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Requerant extends Model
{
    use HasFactory;
    protected $table = 'requerants';
    protected $primaryKey = 'NumReq';
    public $timestamps = false;

    protected $fillable = [
        'Prenom',
        'Postnom',
        'Nom',
        'Sexe',
        'Pseudo',
        'email',
        'password',
        'DateCreat',
        'PhotoProfil',
    ];

    public function visites()
    {
        return $this->belongsToMany(Visite::class, 'demanders', 'NumReq', 'IdVisit');
    }
}
