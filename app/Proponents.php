<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Folder;

class Proponents extends Model
{

    protected $fillable = [
        'proponent_name', 'proponent_office', 'proponent_address', 'proponent_number',
        'proponent_name2', 'proponent_office2', 'proponent_address2', 'proponent_number2',
        'proponent_name3', 'proponent_office3', 'proponent_address3', 'proponent_number3',
        'proponent_name4', 'proponent_office4', 'proponent_address4', 'proponent_number4',
    ];

    public function folder()
    {
        return $this->hasOne(Folder::class);
    }
}
