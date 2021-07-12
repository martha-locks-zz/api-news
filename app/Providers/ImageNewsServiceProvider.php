<?php

declare(strict_types=1);

namespace App\Providers;

use App\Models\ImageNews\ImageNews;
use App\Repositories\ImageNews\ImageNewsRepository;
use App\Services\ImageNews\ImageNewsService;
use Illuminate\Support\ServiceProvider;

class AuthorServiceProvider extends ServiceProvider
{
    public function register()
    {
        parent::register();

        $this->app->bind(ImageNewsService::class, function ($app) {
            return new ImageNewsService(new ImageNewsRepository(new ImageNews()));
        });
    }
}
