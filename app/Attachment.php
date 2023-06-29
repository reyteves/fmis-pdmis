<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Folder;

use Illuminate\Database\Eloquent\SoftDeletes;

class Attachment extends Model
{
    protected $fillable = [
        'ppmp',
        'implementation_plan',
        'summary_of_expenditures',
        'list_of_beneficiaries',
        'other_attachments',
    ];

    public function folder()
    {
        return $this->hasOne(Folder::class);
    }
}



