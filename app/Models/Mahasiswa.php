<?php

namespace App\Models;

use NeoEloquent;

class Mahasiswa extends NeoEloquent {
    protected $fillable = ['nama', 'nim'];
}