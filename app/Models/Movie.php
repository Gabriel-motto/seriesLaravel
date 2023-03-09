<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Movie
 *
 * @property $id
 * @property $name
 * @property $year
 * @property $genre_id
 *
 * @property Genre $genre
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Movie extends Model
{
    
    static $rules = [
		'name' => 'required',
		'year' => 'required',
		'genre_id' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['name','year','genre_id'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function genre()
    {
        return $this->hasOne('App\Models\Genre', 'id', 'genre_id');
    }
    
    public $timestamps = false;
}
