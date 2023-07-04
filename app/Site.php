<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Folder;

use Illuminate\Database\Eloquent\SoftDeletes;

class Site extends Model
{
    protected $fillable = [
        'region',
        'congressional_district',
        'province',
        'municipality',
        'barangay',
        'street_address',
        'cadt_calt',
        'ad_name',
    ];

    public function folder()
    {
        return $this->hasOne(Folder::class);
    }
}



