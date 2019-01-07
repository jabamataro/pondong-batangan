<?php

namespace PondongBatangan;

use Illuminate\Database\Eloquent\Model;

class forApproval extends Model
{
    protected $table = 'for_approval';
    // Primayry Key
    public $primaryKey = 'id';
    // Foreign Key
    public $foreignKey = 'donations_id';
    // Timestamps
    public $timestamps = true;
}
