<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    /**
     * Table name
     *
     * @var string
     */
    protected $table = 'categories';

    /**
     * The mass assignable attributes.
     * 
     * @var array
     */
    protected $fillable = ['name'];

    /**
     * One to many relation.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function posts()
    {
        return $this->hasMany('App\Models\Post');
    }

    /**
     * Mutate space to hyphen('-') in name column.
     *
     * @param $value
     */
    public function setNameAttribute($value)
    {
        $this->attributes['name'] = str_replace(' ', '-', $value);
    }
}
