<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Shop extends Model
{
    /**
     * The attributes that aren't mass assignable.
     *
     * @var array
     */
    protected $guarded = ['id'];

    /**
     * Get the creator of the shop.
     *
     * Note that the creator is the account that have created the shop but it does not means that he have special privileges.
     * Its just for us to keep reference of this user for later uses.
     */
    public function creator()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * The users that belong to the shop.
     */
    public function users()
    {
        return $this->belongsToMany(User::class)->withTimestamps();
    }

    /**
     * The articles that belong to the shop.
     */
    public function articles()
    {
        return $this->hasMany(Article::class);
    }
}
