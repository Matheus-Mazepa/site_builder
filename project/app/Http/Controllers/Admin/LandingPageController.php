<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Resources\Admin\LandingResource;
use App\Repositories\LandingPageRepository;

class LandingPageController extends Controller
{
    public function index()
    {
        return view('admin.landings-pages.index');
    }

    public function getPagination($pagination)
    {
        $pagination
            ->repository(new LandingPageRepository())
            ->defaultOrderBy('created_at', 'DESC')
            ->resource(LandingResource::class);
    }
}
