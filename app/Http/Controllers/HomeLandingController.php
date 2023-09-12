<?php

namespace App\Http\Controllers;

use App\Contracts\Interfaces\AboutLandingInterface;
use App\Contracts\Interfaces\ArticleLandingInterface;
use App\Contracts\Interfaces\AudioLandingInterface;
use App\Contracts\Interfaces\OrganizationLandingInterface;
use App\Contracts\Interfaces\VideoLandingInterface;
use App\Contracts\Interfaces\VisionMissionLandingInterface;
use Illuminate\Http\Request;
use Illuminate\View\View;

class HomeLandingController extends Controller
{
    private AboutLandingInterface $about;
    private VisionMissionLandingInterface $visionMission;
    private OrganizationLandingInterface $organization;
    private VideoLandingInterface $videos;
    private ArticleLandingInterface $article;
    private AudioLandingInterface $audio;

    public function __construct(AboutLandingInterface $about, VisionMissionLandingInterface $visionMission, OrganizationLandingInterface $organization, VideoLandingInterface $videos, ArticleLandingInterface $article, AudioLandingInterface $audio)
    {
        $this->about = $about;
        $this->visionMission = $visionMission;
        $this->organization = $organization;
        $this->videos = $videos;
        $this->article = $article;
        $this->audio = $audio;
    }

    /**
     * display index view
     *
     * @return View
     */
    public function index(): View
    {
        $data = [
            "videos" => $this->videos->getLatest(3),
            "articles" => $this->article->getLatest(4),
            "audios" => $this->audio->getLatest(4),
        ];
        return view('landing.pages.home.index', $data);
    }

    /**
     * display about view
     *
     * @return View
     */
    public function about(): View
    {
        $data = [
            "about" => $this->about->get(),
        ];
        return view('landing.pages.home.about', $data);
    }

    /**
     * display vision mission view
     *
     * @return View
     */
    public function visionMission(): View
    {
        $data = [
            "visionMission" => $this->visionMission->get(),
        ];
        return view('landing.pages.home.vision_mission', $data);
    }

    /**
     * display organization view
     *
     * @return View
     */
    public function organization(): View
    {
        $data = [
            "organization" => $this->organization->get(),
        ];
        return view('landing.pages.home.organization', $data);
    }
}
