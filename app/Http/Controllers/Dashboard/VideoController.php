<?php

namespace App\Http\Controllers\Dashboard;

use App\Contracts\Interfaces\VideoInterface;
use App\Http\Controllers\Controller;
use App\Http\Requests\VideoRequest;
use App\Models\Video;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class VideoController extends Controller
{
    private VideoInterface $video;

    public function __construct(VideoInterface $video)
    {
        $this->video = $video;
    }

    /**
     * Display a listing of the resource.
     *
     * @param Request $request
     * @return View|JsonResponse
     */
    public function index(Request $request): View|JsonResponse
    {
        if ($request->ajax()) return $this->video->datatable();

        return view('dashboard.pages.videos.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return View
     */
    public function create(): View
    {
        return view('dashboard.pages.videos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param VideoRequest $request
     * @return RedirectResponse
     */
    public function store(VideoRequest $request): RedirectResponse
    {
        $this->video->store($request->validated());
        return to_route('videos.index')->with('success', trans('alert.add_success'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Video $video
     * @return View
     */
    public function edit(Video $video): View
    {
        return view('dashboard.pages.videos.edit', compact('video'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param VideoRequest $request
     * @param Video $video
     * @return RedirectResponse
     */
    public function update(VideoRequest $request, Video $video): RedirectResponse
    {
        $this->video->update($video->id, $request->validated());
        return to_route('videos.index')->with('success', trans('alert.update_success'));

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Video $video
     * @return RedirectResponse
     */
    public function destroy(Video $video): RedirectResponse
    {
        $this->video->delete($video->id);

        return back()->with('success', trans('alert.delete_success'));
    }
}
