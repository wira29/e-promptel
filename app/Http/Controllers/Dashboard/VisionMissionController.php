<?php

namespace App\Http\Controllers\Dashboard;

use App\Contracts\Interfaces\VisionMissionInterface;
use App\Http\Controllers\Controller;
use App\Http\Requests\VisionMissionRequest;
use App\Models\VisionMission;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class VisionMissionController extends Controller
{
    private VisionMissionInterface $visionMission;

    public function __construct(VisionMissionInterface $visionMission)
    {
        $this->visionMission = $visionMission;
    }

    /**
     * Display a listing of the resource.
     *
     * @return View
     */
    public function index(): View
    {
        $data = $this->visionMission->get();
        return view('dashboard.pages.vision-mission.index', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(VisionMissionRequest $request, VisionMission $vision_mission): RedirectResponse
    {
        $this->visionMission->update($vision_mission->id, $request->validated());
        return back()->with('success', trans('alert.update_success'));
    }

}
