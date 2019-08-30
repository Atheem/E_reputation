<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;
use Illuminate\Auth\Authenticatable as AuthenticableTrait;
use Illuminate\Contracts\Auth\Authenticatable;

class User extends Eloquent implements  Authenticatable
{
    use AuthenticableTrait;
    use Notifiable;

    protected $connection = 'mongodb';
    protected $collection = 'pango_collection';
}