<?php

namespace App\Providers;

use App\Contracts\Interfaces\AboutInterface;
use App\Contracts\Interfaces\AboutLandingInterface;
use App\Contracts\Interfaces\ActivityInterface;
use App\Contracts\Interfaces\ActivityLandingInterface;
use App\Contracts\Interfaces\AgendaInterface;
use App\Contracts\Interfaces\AgendaLandingInterface;
use App\Contracts\Interfaces\ArticleInterface;
use App\Contracts\Interfaces\ArticleLandingInterface;
use App\Contracts\Interfaces\AudioInterface;
use App\Contracts\Interfaces\AudioLandingInterface;
use App\Contracts\Interfaces\CategoryInterface;
use App\Contracts\Interfaces\ContactInterface;
use App\Contracts\Interfaces\ContactLandingInterface;
use App\Contracts\Interfaces\OrganizationInterface;
use App\Contracts\Interfaces\OrganizationLandingInterface;
use App\Contracts\Interfaces\PollAnswerInterface;
use App\Contracts\Interfaces\PollingLandingInterface;
use App\Contracts\Interfaces\PollInterface;
use App\Contracts\Interfaces\QuestionInterface;
use App\Contracts\Interfaces\QuestionLandingInterface;
use App\Contracts\Interfaces\RespondentInterface;
use App\Contracts\Interfaces\VideoInterface;
use App\Contracts\Interfaces\VideoLandingInterface;
use App\Contracts\Interfaces\VisionMissionInterface;
use App\Contracts\Interfaces\VisionMissionLandingInterface;
use App\Contracts\Repositories\AboutLandingRepository;
use App\Contracts\Repositories\AboutRepository;
use App\Contracts\Repositories\ActivityLandingRepository;
use App\Contracts\Repositories\ActivityRepository;
use App\Contracts\Repositories\AgendaLandingRepository;
use App\Contracts\Repositories\AgendaRepository;
use App\Contracts\Repositories\ArticleLandingRepository;
use App\Contracts\Repositories\ArticleRepository;
use App\Contracts\Repositories\AudioLandingRepository;
use App\Contracts\Repositories\AudioRepository;
use App\Contracts\Repositories\CategoryRepository;
use App\Contracts\Repositories\ContactLandingRepository;
use App\Contracts\Repositories\ContactRepository;
use App\Contracts\Repositories\OrganizationLandingRepository;
use App\Contracts\Repositories\OrganizationRepository;
use App\Contracts\Repositories\PollAnswerRepository;
use App\Contracts\Repositories\PollingLandingRepository;
use App\Contracts\Repositories\PollRepository;
use App\Contracts\Repositories\QuestionLandingRepository;
use App\Contracts\Repositories\QuestionRepository;
use App\Contracts\Repositories\RespondentRepository;
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
        OrganizationLandingInterface::class => OrganizationLandingRepository::class,
        AgendaInterface::class => AgendaRepository::class,
        ActivityInterface::class => ActivityRepository::class,
        AgendaLandingInterface::class => AgendaLandingRepository::class,
        ActivityLandingInterface::class => ActivityLandingRepository::class,
        ContactInterface::class => ContactRepository::class,
        PollInterface::class => PollRepository::class,
        ContactLandingInterface::class => ContactLandingRepository::class,
        QuestionInterface::class => QuestionRepository::class,
        PollingLandingInterface::class => PollingLandingRepository::class,
        QuestionLandingInterface::class => QuestionLandingRepository::class,
        RespondentInterface::class => RespondentRepository::class,
        PollAnswerInterface::class => PollAnswerRepository::class,
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
