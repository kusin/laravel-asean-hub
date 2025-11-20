<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Voters extends Model
{
    // ...
    use SoftDeletes, HasFactory;

    // ...
    protected $table        = 'tb_voters';
    protected $primaryKey   = 'id_voters';

    // ...
    protected $keyType      = 'int';
    public $incrementing    = true;

    // ...
    protected $fillable = [
        'ip_address',
        'mac_address',
        'voters_name',
        'voters_job',
        'voters_email',
        'voters_password',
        'status_data',
    ];

    // ...
    protected $casts = [
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
        'deleted_at' => 'datetime',
    ];
}
