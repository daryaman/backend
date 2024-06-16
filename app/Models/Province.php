<?php

namespace App\Models;

use App\Models\Regency;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Province extends Model
{
    use HasFactory;
    
    public $incrementing = false;

    /**
     * Get the comments for the blog post.
     */
    public function regencies(): HasMany
    {
        return $this->hasMany(Regency::class);
    }


}
