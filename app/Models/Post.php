<?php

namespace App\Models;

use App\Models\Category;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Post extends Model
{
    use HasFactory;

/**
* The attributes that aren't mass assignable.
*
* @var array
*/
protected $guarded = [];

/**
* Get the user that owns the Graph
*
* @return \Illuminate\Database\Eloquent\Relations\BelongsTo
*/
public function category()
{
return $this->belongsTo(Category::class);
}
}
