<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Lease extends Model
{
    use SoftDeletes;

    public $table = 'leases';

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'adresa',
        'created_at',
        'updated_at',
        'deleted_at',
        'typ_bytu_id',
    ];

    public function typ_bytu()
    {
        return $this->belongsTo(Typeproperty::class, 'typ_bytu_id');

    }
}
