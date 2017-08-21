<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use Notifiable;

    protected $fillable = [
        'ticketId', 'comment', 'author'
    ];
}
