<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Task extends Model
{
    /** @use HasFactory<\Database\Factories\TaskFactory> */
    use HasFactory;
    /**
     * @return HasMany<TimeEntry,Task>
     */
    public function time_entries(): HasMany
    {
        return $this->hasMany(TimeEntry::class);
    }
}
