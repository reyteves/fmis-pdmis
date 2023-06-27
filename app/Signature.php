<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Folder;

use Illuminate\Database\Eloquent\SoftDeletes;

class Signature extends Model
{
    protected $fillable = [
        'prepared_by_checkbox',
        'prepared_by_input',
        'evaluated_by_checkbox',
        'evaluated_by_input',
        'confirmed_by_checkbox',
        'confirmed_by_input',
        'validated_by_checkbox',
        'validated_by_input',
        'endorsed_by_checkbox',
        'endorsed_by_input',
        'recommended_by_checkbox',
        'recommended_by_input',
        'approved_by_checkbox',
        'approved_by_input',
    ];

    public function folder()
    {
        return $this->hasOne(Folder::class);
    }
}



