<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Propriete extends Model
{
    use HasFactory;
    protected $table = 'proprietes';
    protected $primaryKey = 'NumProp';
    public $timestamps = false;
    protected $guarded = [];

    protected $fillable = [
        'DesignProp',
        'Descript',
        'Image1',
        'Image2',
        'Image3',
        'TypeProp',
        'CodCat',
    ];

    public function Categorie()
    {
        return $this->belongsTo(Categorie::class, 'CodCat', 'CodCat');
    }

    public function Responsable()
    {
        return $this->belongsToMany(Responsable::class, 'posters', 'NumProp', 'IdResp');
    }

    public function Photo()
    {
        return $this->hasMany(Photo::class, 'NumProp', 'IdPhoto');
    }
}
