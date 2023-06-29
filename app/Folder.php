<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Traits\FilterByUser;

/**
 * Class Folder
 *
 * @package App
 * @property string $name
 * @property string $created_by
 */
class Folder extends Model
{
    use SoftDeletes, FilterByUser;

    // protected $fillable = ['name', 'created_by_id'];
    protected $fillable = ['name', 'created_by_id', 'project_id', 'signature_id'];


    public function project()
    {
        return $this->belongsTo(Project::class, 'project_id')->withDefault();
    }

    public function signature()
    {
        return $this->belongsTo(Signature::class, 'signature_id')->withDefault();
    }
    public function attachment()
    {
        return $this->belongsTo(Attachment::class, 'attachment_id')->withDefault();
    }

    /**
     * Set to null if empty
     * @param $input
     */
    public function setCreatedByIdAttribute($input)
    {
        $this->attributes['created_by_id'] = $input ? $input : null;
    }

    public function created_by()
    {
        return $this->belongsTo(User::class, 'created_by_id');
    }
}
