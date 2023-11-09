<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    use HasFactory;
    protected $table = 'photos';
    // protected $primaryKey = 'NumProp';  
    public $timestamps = true;
    protected $fillable = [
        'Photos',
    ];

    public function Propriete()
    {
        return $this->belongsTo(Propriete::class, 'NumProp', 'NumProp');
    }
}
