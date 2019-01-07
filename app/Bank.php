<?php

namespace PondongBatangan;

use Illuminate\Database\Eloquent\Model;

class Bank extends Model
{
    protected $table = 'banks';
    // Primayry Key
    public $primaryKey = 'id';
    // Timestamps
    public $timestamps = true;
}
