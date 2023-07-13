<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Folder;

use Illuminate\Database\Eloquent\SoftDeletes;

class Project extends Model
{
    protected $fillable = ['name', 'description', 'background_and_rationale', 'objectives', 'project_implementation', 'monitoring_evaluation', 'potential_risk', 'sustainability_plan'];

    public function folder()
    {
        return $this->hasOne(Folder::class);
    }
}

