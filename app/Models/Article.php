<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Article extends Model
{
    protected $fillable = [
        'name',
        'description',
        'img',
        'user_id',
        ];


        public function users(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

}
