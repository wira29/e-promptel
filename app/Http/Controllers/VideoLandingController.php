<?php

namespace App\Http\Controllers;

use App\Contracts\Interfaces\VideoLandingInterface;
use App\Http\Controllers\Controller;
use Illuminate\View\View;
use Jorenvh\Share\ShareFacade;

class VideoLandingController extends Controller
{

    private VideoLandingInterface $video;

    public function __construct(VideoLandingInterface $video)
    {
        $this->video = $video;
    }

    /**
     * Display a listing of the resource.
     *
     * @return View
     */
    public function index(): View
    {
        $data = [
            'videos' => $this->video->paginate(9)
        ];

        return view('landing.pages.videos.videos', $data);
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
            'video' => $this->video->show($slug),
            'latests' => $this->video->getLatest(5),
            'share' => ShareFacade::page(url()->full(), 'Share title')
                ->facebook()
                ->twitter()
                ->telegram()
                ->whatsapp()
                ->getRawLinks(),
        ];

        return view('landing.pages.videos.detail_video', $data);
    }
}
