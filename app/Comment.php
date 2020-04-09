<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
  
class Comment extends Model
{
    use SoftDeletes;
   
    protected $dates = ['deleted_at'];
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['post_id', 'name', 'email', 'website', 'comment'];

    /**
     * The belongs to Relationship
     *
     * @var array
     */
    public function post()
    {
        return $this->belongsTo('App\Post', 'post_id', 'id');
    }
}
