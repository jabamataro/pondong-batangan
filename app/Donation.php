<?php

namespace PondongBatangan;

use Illuminate\Database\Eloquent\Model;

class Donation extends Model
{
    protected $guarded = [];
    // Table Name
    protected $table = 'donations';
    // Primayry Key
    public $primaryKey = 'reference_number';
    // Timestamps
    public $timestamps = true;
}
