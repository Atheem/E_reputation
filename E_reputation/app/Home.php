<?php

namespace App;


use Jenssegers\Mongodb\Eloquent\Model as Eloquent;


class Home extends Eloquent 
{
   

    protected $connection = 'mongodb';
    protected $collection = 'posts';
}
