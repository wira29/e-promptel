<?php

namespace App\Http\Controllers;

use App\Contracts\Interfaces\AboutLandingInterface;
use App\Contracts\Interfaces\VisionMissionLandingInterface;
use Illuminate\Http\Request;
use Illuminate\View\View;

class HomeLandingController extends Controller
{
    private AboutLandingInterface $about;
    private VisionMissionLandingInterface $visionMission;
    public function __construct(AboutLandingInterface $about, VisionMissionLandingInterface $visionMission)
    {
        $this->about = $about;
        $this->visionMission = $visionMission;
    }

    /**
     * display index view
     *
     * @return View
     */
    public function index(): View
    {
        return view('landing.pages.home.index');
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
}
