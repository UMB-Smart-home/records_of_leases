<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Typeproperty extends Model
{
    use SoftDeletes;

    public $table = 'typeproperties';

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'typ_bytu',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    public function typBytuLeases()
    {
        return $this->hasMany(Lease::class, 'typ_bytu_id', 'id');

    }
}
