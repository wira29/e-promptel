<?php

namespace App\Http\Controllers\Dashboard;

use App\Contracts\Interfaces\ContactInterface;
use App\Http\Controllers\Controller;
use App\Http\Requests\ContactRequest;
use App\Models\Contact;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class ContactController extends Controller
{
    private ContactInterface $contact;

    public function __construct(ContactInterface $contact)
    {
        $this->contact = $contact;
    }

    /**
     * Display a listing of the resource.
     *
     * @return View
     */
    public function index(): View
    {
        $contact = $this->contact->get();

        return view('dashboard.pages.contact.index', compact('contact'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param ContactRequest $request
     * @param Contact $contact
     * @return RedirectResponse
     */
    public function update(ContactRequest $request, Contact $contact): RedirectResponse
    {
        $this->contact->update($contact->id, $request->validated());

        return back()->with('success', trans('alert.update_success'));
    }
}
