<?php

namespace App\Models;

use App\Scopes\SearchScope;
use Illuminate\Database\Eloquent\Model;

class LandingPage extends Model
{
    use SearchScope;

    protected $searchBy = [
        'name',
        'is_active',
        'path',
    ];


}
