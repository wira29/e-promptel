<?php

namespace App\Http\Controllers;

use App\Contracts\Interfaces\ContactLandingInterface;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ContactLandingController extends Controller
{
    private ContactLandingInterface $contact;

    public function __construct(ContactLandingInterface $contact)
    {
        $this->contact = $contact;
    }

    /**
     * display about view
     *
     * @return View
     */
    public function index(): View
    {
        $data = [
            "contact" => $this->contact->get(),
        ];
        return view('landing.pages.contact.contact', $data);
    }
}
