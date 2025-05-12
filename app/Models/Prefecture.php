<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * 
 *
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\User> $users
 * @property-read int|null $users_count
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Prefecture newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Prefecture newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Prefecture query()
 * @mixin \Eloquent
 */
class Prefecture extends Model
{
    /**
     * The attributes that aren't mass assignable.
     *
     * @var list<string>
     */
    protected $guarded = [
        'id',
    ];

    /**
     * Get the users for the prefecture.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function users()
    {
        return $this->hasMany(User::class);
    }
}
