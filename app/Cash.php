<?php

namespace PondongBatangan;

use Illuminate\Database\Eloquent\Model;

class Cash extends Model
{
    protected $table = 'cashes';
    // Primayry Key
    public $primaryKey = 'id';
    // Timestamps
    public $timestamps = true;
}
