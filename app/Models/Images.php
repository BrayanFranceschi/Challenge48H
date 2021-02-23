<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Images extends Model
{
    use HasFactory;


     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nom',
        'url_image',
        'type',
        'avecProduit',
        'avecHumain',
        'institutionelle',
        'format',
        'credit',
        'droitUtilisation',
        'copyright',
        'dateFinUtilisation',
        'tags'
    ];


    public function tags(){
        return $this->hasMany(Tags::class)->latest();
    }
}
