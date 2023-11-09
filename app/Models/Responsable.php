<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Responsable extends Model
{
    use HasFactory;

    protected $table = 'responsables';
    protected $primaryKey = 'IdResp';
    public $timestamps = false;

    protected $fillable = [
        'Prenom',
        'Postnom',
        'Nom',
        'Sexe',
        'Pseudo',
        'email',
        'password',
        'PhotoProfil',
        'AgeResp',
        'Descript',
    ];

    public function Propriete()
    {
        return $this->belongsToMany(Propriete::class, 'posters', 'IdResp', 'NumProp');
    }
}
