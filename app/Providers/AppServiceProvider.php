<?php

namespace App\Providers;

use App\Contracts\Interfaces\AboutInterface;
use App\Contracts\Interfaces\AboutLandingInterface;
use App\Contracts\Interfaces\ArticleInterface;
use App\Contracts\Interfaces\ArticleLandingInterface;
use App\Contracts\Interfaces\AudioInterface;
use App\Contracts\Interfaces\AudioLandingInterface;
use App\Contracts\Interfaces\CategoryInterface;
use App\Contracts\Interfaces\OrganizationInterface;
use App\Contracts\Interfaces\VideoInterface;
use App\Contracts\Interfaces\VideoLandingInterface;
use App\Contracts\Interfaces\VisionMissionInterface;
use App\Contracts\Interfaces\VisionMissionLandingInterface;
use App\Contracts\Repositories\AboutLandingRepository;
use App\Contracts\Repositories\AboutRepository;
use App\Contracts\Repositories\ArticleLandingRepository;
use App\Contracts\Repositories\ArticleRepository;
use App\Contracts\Repositories\AudioLandingRepository;
use App\Contracts\Repositories\AudioRepository;
use App\Contracts\Repositories\CategoryRepository;
use App\Contracts\Repositories\OrganizationRepository;
use App\Contracts\Repositories\VideoLandingRepository;
use App\Contracts\Repositories\VideoRepository;
use App\Contracts\Repositories\VisionMissionLandingRepository;
use App\Contracts\Repositories\VisionMissionRepository;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    private array $register = [
        CategoryInterface::class => CategoryRepository::class,
        ArticleInterface::class => ArticleRepository::class,
        AboutInterface::class => AboutRepository::class,
        VisionMissionInterface::class => VisionMissionRepository::class,
        AudioInterface::class => AudioRepository::class,
        VideoInterface::class => VideoRepository::class,
        VideoLandingInterface::class => VideoLandingRepository::class,
        OrganizationInterface::class => OrganizationRepository::class,
        AudioLandingInterface::class => AudioLandingRepository::class,
        ArticleLandingInterface::class => ArticleLandingRepository::class,
        AboutLandingInterface::class => AboutLandingRepository::class,
        VisionMissionLandingInterface::class => VisionMissionLandingRepository::class,
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
        Paginator::defaultView('vendor.pagination.custom-pagination');
    }
}
