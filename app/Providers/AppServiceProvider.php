<?php

namespace App\Providers;

use App\Contracts\Interfaces\AboutInterface;
use App\Contracts\Interfaces\ArticleInterface;
use App\Contracts\Interfaces\CategoryInterface;
use App\Contracts\Interfaces\VisionMissionInterface;
use App\Contracts\Repositories\AboutRepository;
use App\Contracts\Repositories\ArticleRepository;
use App\Contracts\Repositories\CategoryRepository;
use App\Contracts\Repositories\VisionMissionRepository;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    private array $register = [
        CategoryInterface::class => CategoryRepository::class,
        ArticleInterface::class => ArticleRepository::class,
        AboutInterface::class => AboutRepository::class,
        VisionMissionInterface::class => VisionMissionRepository::class
    ];

    /**
     * Register any application services.
     */
    public function register(): void
    {
        foreach ($this->register as $index => $value) $this->app->bind($index, $value);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
