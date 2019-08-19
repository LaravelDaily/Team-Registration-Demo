<?php

namespace App;

use App\Traits\MultiTenantModelTrait;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ContactCompany extends Model
{
    use SoftDeletes, MultiTenantModelTrait;

    public $table = 'contact_companies';

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'team_id',
        'created_at',
        'updated_at',
        'deleted_at',
        'company_name',
        'company_email',
        'company_address',
        'company_website',
    ];

    public function contactContacts()
    {
        return $this->hasMany(ContactContact::class, 'company_id', 'id');
    }

    public function team()
    {
        return $this->belongsTo(Team::class, 'team_id');
    }
}
