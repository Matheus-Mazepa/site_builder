<?php

namespace App\Repositories;

use App\Models\LandingPage;

class LandingPageRepository extends Repository
{
    protected function getClass()
    {
        return LandingPage::class;
    }
}
