<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categorie extends Model
{
    use HasFactory;
    protected $table = 'categories';
    protected $primaryKey = 'CodCat';
    public $timestamps = false;
    protected $guarded = [];

    protected $fillable = [
        'LibCat',
    ];

    public function Propriete()
    {
        return $this->hasMany(Propriete::class, 'CodCat', 'NumProp');
    }
}
