<?php

namespace App\Http\Controllers;

use App\Contracts\Interfaces\AudioLandingInterface;
use App\Contracts\Interfaces\VideoLandingInterface;
use App\Http\Controllers\Controller;
use Illuminate\View\View;
use Jorenvh\Share\ShareFacade;

class AudioLandingController extends Controller
{

    private AudioLandingInterface $audio;

    public function __construct(AudioLandingInterface $audio)
    {
        $this->audio = $audio;
    }

    /**
     * Display a listing of the resource.
     *
     * @return View
     */
    public function index(): View
    {
        $data = [
            'audios' => $this->audio->paginate(9)
        ];

        return view('landing.pages.audios.audios', $data);
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
            'audio' => $this->audio->show($slug),
            'latests' => $this->audio->getLatest(5),
            'share' => ShareFacade::page(url()->full(), 'Share title')
                ->facebook()
                ->twitter()
                ->telegram()
                ->whatsapp()
                ->getRawLinks(),
        ];

        return view('landing.pages.audios.detail_audio', $data);
    }
}
