<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Series
 *
 * @property $id
 * @property $name
 * @property $seasons
 * @property $genre_id
 *
 * @property Genre $genre
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Series extends Model
{
    
    static $rules = [
		'name' => 'required',
		'seasons' => 'required',
		'genre_id' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['name','seasons','genre_id'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function genre()
    {
        return $this->hasOne('App\Models\Genre', 'id', 'genre_id');
    }
    
    public $timestamps = false;
}
