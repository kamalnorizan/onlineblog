<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    use SoftDeletes;

    public $timestamps = true;

    protected $table = 'posts';

    protected $primaryKey = 'id';

    public $incrementing = true;

    protected $guarded = ['id'];

    // protected $fillable = ['title', 'user_id', 'publish_at', 'body'];

}
