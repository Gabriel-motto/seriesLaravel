<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Genre
 *
 * @property $id
 * @property $name
 *
 * @property Movie[] $movies
 * @property Series[] $series
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Genre extends Model
{
    
    static $rules = [
		'name' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['name'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function movies()
    {
        return $this->hasMany('App\Models\Movie', 'genre_id', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function series()
    {
        return $this->hasMany('App\Models\Series', 'genre_id', 'id');
    }
    
    public $timestamps = false;
}
