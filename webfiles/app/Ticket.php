<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Ticket extends Model {

    use Notifiable;

    protected $fillable = [
        'firstName', 'lastName', 'email', 'issueTitle', 'os', 'description',
    ];

}