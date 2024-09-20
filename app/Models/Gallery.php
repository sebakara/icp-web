<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    use HasFactory;

    protected $fillable = [
        'Image_category',
        'Image',
        'parent_event_id',
        'event_title', 
        'event_description', 
        'event_year', 
        
    ];

    // One event can have many sub-events
    public function subEvents()
    {
        return $this->hasMany(Gallery::class, 'parent_event_id');
    }

    // Each sub-event belongs to one main event
    public function parentEvent()
    {
        return $this->belongsTo(Gallery::class, 'parent_event_id');
    }
}
