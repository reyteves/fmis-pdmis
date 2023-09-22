<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Folder;

class Implementers extends Model
{

    protected $fillable = [
        'implementer_name', 'implementer_office', 'implementer_address', 'implementer_number',
        'implementer_name2', 'implementer_office2', 'implementer_address2', 'implementer_number2',
        'implementer_name3', 'implementer_office3', 'implementer_address3', 'implementer_number3',
        'implementer_name4', 'implementer_office4', 'implementer_address4', 'implementer_number4',
    ];

    public function folder()
    {
        return $this->hasOne(Folder::class);
    }
}


