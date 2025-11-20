<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Participants extends Model
{
    // ...
    use SoftDeletes, HasFactory;

    // ...
    protected $table        = 'tb_participants';
    protected $primaryKey   = 'id_participants';

    // ...
    protected $keyType      = 'int';
    public $incrementing    = true;

    // ...
    protected $fillable = [
        'team_name',
        'participants_name_1',
        'participants_name_2',
        'participants_name_3',
        'participants_name_4',
        'participants_name_5',
        'participants_contact_person',
        'participants_email',
        'participants_password',
        'status_data',
    ];

    // ...
    protected $casts = [
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
        'deleted_at' => 'datetime',
    ];

    // ...
    public function urbanDesign()
    {
        return $this->hasMany(UrbanDesign::class, 'id_participants', 'id_participants');
    }
}
