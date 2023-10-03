<?php

namespace App\Http\Controllers\Dashboard;

use App\Contracts\Interfaces\ProfileInterface;
use App\Http\Controllers\Controller;
use App\Http\Requests\ProfileRequest;
use App\Services\ProfileService;
use Illuminate\View\View;
use Symfony\Component\HttpFoundation\RedirectResponse;

class ProfileController extends Controller
{
    private ProfileInterface $profile;
    private ProfileService $service;

    public function __construct(ProfileInterface $profile, ProfileService $service)
    {
        $this->profile = $profile;
        $this->service = $service;
    }

    /**
     * Display a listing of the resource.
     *
     * @return View
     */
    public function index(): View
    {
        $data = $this->profile->get();

        return view('dashboard.pages.profile.index', compact('data'));
    }

    /**
     * Display an edit of the resource.
     *
     * @return View
     */
    public function edit(): View
    {
        $employee = $this->profile->get();

        return view('dashboard.pages.profile.edit', compact('employee'));
    }

    /**
     * Display an edit action of the resource.
     *
     * @param ProfileRequest $request
     * @return RedirectResponse
     */
    public function update(ProfileRequest $request): RedirectResponse
    {
        $this->profile->update(auth()->id(), $this->service->update($request));

        return to_route('user.profile')->with('success', trans('alert.update_success'));
    }
}
