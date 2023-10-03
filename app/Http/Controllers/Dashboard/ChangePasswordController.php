<?php

namespace App\Http\Controllers\Dashboard;

use App\Contracts\Interfaces\ProfileInterface;
use App\Http\Controllers\Controller;
use App\Http\Requests\ChangePasswordRequest;
use Illuminate\Http\RedirectResponse;

class ChangePasswordController extends Controller
{
    private ProfileInterface $profile;

    public function __construct(ProfileInterface $profile)
    {
        $this->profile = $profile;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param ChangePasswordRequest $request
     * @return RedirectResponse
     */
    public function update(ChangePasswordRequest $request): RedirectResponse
    {
        $validated = $request->validated();

        $this->profile->update(auth()->id(), [
            'password' => bcrypt($validated['password'])
        ]);

        return back()->with('success', trans('alert.password_update_success'));
    }

}
