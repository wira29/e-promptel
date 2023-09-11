<?php

namespace App\Http\Controllers;

use App\Contracts\Interfaces\AboutLandingInterface;
use Illuminate\Http\Request;
use Illuminate\View\View;

class HomeLandingController extends Controller
{
    private AboutLandingInterface $about;
    public function __construct(AboutLandingInterface $about)
    {
        $this->about = $about;
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
}
