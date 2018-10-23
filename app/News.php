<?php

namespace PondongBatangan;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    // Table Name
    protected $table = 'news';
    // Primayry Key
    public $primaryKey = 'id';
    // Timestamps
    public $timestamps = true;
}
