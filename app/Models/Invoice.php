<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Invoice extends Model
{
    /** @use HasFactory<\Database\Factories\InvoiceFactory> */
    use HasFactory;
    /**
     * @return BelongsTo<Costumer,Invoice>
     */
    public function costumer(): BelongsTo
    {
        return $this->belongsTo(Costumer::class);
    }
}
