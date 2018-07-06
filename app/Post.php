<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

// Post Model
class Post extends Model
{
    // Table Name
    protected $table = 'posts';
    // Primary Key
    protected $primaryKey = 'id';
    // Timestamps
    public $timestamps = true;

    // Relation to User
    public function user() {
        return $this->belongsTo('App\User');
    }
}
