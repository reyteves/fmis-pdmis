<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Folder;


class Beneficiaries extends Model
{
    protected $fillable = [
        'ip_group_total', 'ip_group_male', 'ip_group_female',
        'pwd_total', 'pwd_male', 'pwd_female',
        'children_total', 'children_male', 'children_female',
        'youth_total', 'youth_male', 'youth_female',
        'adult_total', 'adult_male', 'adult_female',
        'older_total', 'older_male', 'older_female',
    ];

    public function folder()
    {
        return $this->hasOne(Folder::class);
    }
}