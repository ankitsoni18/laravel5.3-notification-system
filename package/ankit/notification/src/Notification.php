<?php

namespace ankit\notification;

use Illuminate\Database\Eloquent\Model;

class Notification extends Model
{
    protected $table = "notifications";

    protected $fillable = ['title', 'body', 'user_id'];

    public function user()
    {
        return $this->belongsTo(\App\User::class);
    }

}
