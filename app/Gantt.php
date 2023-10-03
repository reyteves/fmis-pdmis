<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gantt extends Model
{
    protected $fillable = [
        'gantt_project_name',
        'task_1', 'task_1_start_date', 'task_1_end_date',
        'task_2', 'task_2_start_date', 'task_2_end_date',
        'task_3', 'task_3_start_date', 'task_3_end_date',
        'task_4', 'task_4_start_date', 'task_4_end_date',
        'task_5', 'task_5_start_date', 'task_5_end_date',
        'task_6', 'task_6_start_date', 'task_6_end_date',
        'task_7', 'task_7_start_date', 'task_7_end_date',
    ];


    public function folder()
    {
        return $this->hasOne(Folder::class);
    }
}
