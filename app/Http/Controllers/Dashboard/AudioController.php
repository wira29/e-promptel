<?php

namespace App\Http\Controllers\Dashboard;

use App\Contracts\Interfaces\AudioInterface;
use App\Http\Controllers\Controller;
use App\Http\Requests\AudioRequest;
use App\Models\Audio;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class AudioController extends Controller
{
    private AudioInterface $audio;

    public function __construct(AudioInterface $audio)
    {
        $this->audio = $audio;
    }

    /**
     * Display a listing of the resource.
     *
     * @param Request $request
     * @return View|JsonResponse
     */
    public function index(Request $request): View|JsonResponse
    {
        if ($request->ajax()) return $this->audio->datatable();

        return view('dashboard.pages.audios.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return View
     */
    public function create(): View
    {
        return view('dashboard.pages.audios.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param AudioRequest $request
     * @return RedirectResponse
     */
    public function store(AudioRequest $request): RedirectResponse
    {
        $this->audio->store($request->validated());

        return to_route('audios.index')->with('success', trans('alert.add_success'));
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param Audio $audio
     * @return View
     */
    public function edit(Audio $audio): View
    {
        return view('dashboard.pages.audios.edit', compact('audio'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param AudioRequest $request
     * @param Audio $audio
     * @return RedirectResponse
     */
    public function update(AudioRequest $request, Audio $audio): RedirectResponse
    {
        $this->audio->update($audio->id, $request->validated());
        return to_route('audios.index')->with('success', trans('alert.update_success'));

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Audio $audio
     * @return RedirectResponse
     */
    public function destroy(Audio $audio): RedirectResponse
    {
        $this->audio->delete($audio->id);

        return back()->with('success', trans('alert.delete_success'));
    }
}
