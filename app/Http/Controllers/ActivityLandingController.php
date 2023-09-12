<?php

namespace App\Http\Controllers;

use App\Contracts\Interfaces\ActivityLandingInterface;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Jorenvh\Share\ShareFacade;

class ActivityLandingController extends Controller
{
    private ActivityLandingInterface $activity;

    public function __construct(ActivityLandingInterface $activity)
    {
        $this->activity = $activity;
    }

    /**
     * Display a listing of the resource.
     *
     * @return View
     */
    public function index(): View
    {
        $data = [
            'activities' => $this->activity->paginate(9),
            'latests' => $this->activity->getLatest(5)
        ];

        return view('landing.pages.activity.activity', $data);
    }

    /**
     * Display a listing of the resource.
     *
     * @param string $slug
     * @return View
     */
    public function show(string $slug): View
    {
        $data = [
            'activity' => $this->activity->show($slug),
            'latests' => $this->activity->getLatest(5),
            'share' => ShareFacade::page(url()->full(), 'Share title')
                ->facebook()
                ->twitter()
                ->telegram()
                ->whatsapp()
                ->getRawLinks(),
        ];

        return view('landing.pages.activity.detail_activity', $data);
    }
}
