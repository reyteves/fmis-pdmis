<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Folder;

class Stakeholders extends Model
{

    protected $fillable = [
        'stakeholder_name', 'stakeholder_office', 'stakeholder_address', 'stakeholder_number',
        'stakeholder_name2', 'stakeholder_office2', 'stakeholder_address2', 'stakeholder_number2',
        'stakeholder_name3', 'stakeholder_office3', 'stakeholder_address3', 'stakeholder_number3',
        'stakeholder_name4', 'stakeholder_office4', 'stakeholder_address4', 'stakeholder_number4',
    ];

    public function folder()
    {
        return $this->hasOne(Folder::class);
    }
}
