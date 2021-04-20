<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hero extends Model
{
    use HasFactory;

    /**
     * The array properties to asigment fillable
     * @var array $fillable
     */

    protected $fillable = ['name', 'company', 'url'];

    public function getRouteKeyName()
    {
        return 'url';
    }

}
