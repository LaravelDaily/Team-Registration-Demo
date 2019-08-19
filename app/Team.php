<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Team extends Model
{
    use SoftDeletes;

    public $table = 'teams';

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'name',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    public function users()
    {
        return $this->hasMany(User::class, 'team_id', 'id');
    }

    public function contactCompanies()
    {
        return $this->hasMany(ContactCompany::class, 'team_id', 'id');
    }

    public function contactContacts()
    {
        return $this->hasMany(ContactContact::class, 'team_id', 'id');
    }
}
