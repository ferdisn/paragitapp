<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Code extends Model
{
    protected $primaryKey = 'codeName';
    public $incrementing = false;
    protected $keyType = 'string';
}
