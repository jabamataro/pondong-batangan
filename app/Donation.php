<?php

namespace PondongBatangan;

use Illuminate\Database\Eloquent\Model;

class Donation extends Model
{
    // Table Name
    protected $table = 'donations';
    // Primayry Key
    public $primaryKey = 'id';
    // Timestamps
    public $timestamps = true;
}
