<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Collection extends Model
{
    /** @use HasFactory<\Database\Factories\CollectionFactory> */
    use HasFactory;

    public function tasks()
    {
      return $this->belongsToMany(Task::class, relatedPivotKey: 'task_collection');
    }
}
