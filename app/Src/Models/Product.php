<?php

namespace App\Src\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
	use SoftDeletes;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'products';

    /**
     * The attributes that aren't mass assignable.
     *
     * @var array
     */
    protected $guarded = ['db_key_id'];

    /**
     * Primary key
     *
     * @var array
     */
    protected $primaryKey = 'db_key_id';

    /**
     *
     */
    public function getTagsAttribute($tags) {
    	return json_decode($tags);
    }

}