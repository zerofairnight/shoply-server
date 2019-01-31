<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    /**
     * The attributes that aren't mass assignable.
     *
     * @var array
     */
    protected $guarded = ['id'];

    /**
     * Get the shop of the article.
     */
    public function shop()
    {
        return $this->belongsTo(Shop::class);
    }
}
