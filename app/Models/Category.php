<?php

namespace App\Models;

use App\Models\Post;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Category extends Model
{
    use HasFactory;

 /**
* The attributes that aren't mass assignable.
*
* @var array
*/
protected $guarded = [];

/**
* Get all of the comments for the User
*
* @return \Illuminate\Database\Eloquent\Relations\HasMany
*/
public function post()
{
 return $this->hasMany(Post::class);
}

}
