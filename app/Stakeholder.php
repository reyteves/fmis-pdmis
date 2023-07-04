<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Folder;

class Stakeholder extends Model
{
   
    protected $fillable = ['name', 'office_address', 'contact_number'];

    public function folder()
    {
        return $this->belongsToMany(Folder::class)->withTimestamps();
    }
}