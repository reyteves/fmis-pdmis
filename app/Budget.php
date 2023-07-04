<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Folder;

use Illuminate\Database\Eloquent\SoftDeletes;

class Budget extends Model
{
    protected $fillable = [
        'project_status',
        'implementation_mode',
        'project_basis',
        'total_project_cost',
        'direct_cost',
        'indirect_cost',
        'source_of_fund',
        'budget_year',
        'core_program',
        'sub_program',
        'target_date_start',
        'target_date_completion',
    ];

    public function folder()
    {
        return $this->hasOne(Folder::class);
    }
}
