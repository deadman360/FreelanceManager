<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Project extends Model
{
    /** @use HasFactory<\Database\Factories\ProjectFactory> */
    use HasFactory;
    /**
     * @return HasMany<Task,Project>
     */
    public function tasks(): HasMany
    {
        return $this->hasMany(Task::class);
    }
    /**
     * @return HasOne<Invoice,Project>
     */
    public function invoice(): HasOne
    {
        return $this->hasOne(Invoice::class);
    }
    /**
     * @return HasMany<Credential,Project>
     */
    public function credentials(): HasMany
    {
        return $this->hasMany(Credential::class);
    }
    /**
     * @return HasMany<ActivityLog,Project>
     */
    public function activity_logs(): HasMany
    {
        return $this->hasMany(ActivityLog::class);
    }
}
