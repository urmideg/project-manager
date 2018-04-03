<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'status', 'description', 'worker'
    ];

    /**
     * Задачи для текущего программиста
     */
    public function scopeUserTask($query, $name)
    {
        return $query->where('worker', $name);
    }
}
