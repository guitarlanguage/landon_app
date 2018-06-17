<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Title extends ReadOnlySecondBase
{
    protected $titles_array = ['Mr', 'Mrs', 'Ms', 'Dr', 'MX'];

}
