<?php

namespace App\Http\Controllers;

use App\Contracts\Interfaces\ArticleLandingInterface;
use App\Http\Controllers\Controller;
use Illuminate\View\View;
use Jorenvh\Share\Share;
use Jorenvh\Share\ShareFacade;

class ArticleLandingController extends Controller
{

    private ArticleLandingInterface $article;

    public function __construct(ArticleLandingInterface $article)
    {
        $this->article = $article;
    }

    /**
     * Display a listing of the resource.
     *
     * @return View
     */
    public function index(): View
    {
        $data = [
            'articles' => $this->article->paginate(9),
            'latests' => $this->article->getLatest(5)
        ];

        return view('landing.pages.articles.articles', $data);
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
            'article' => $this->article->show($slug),
            'latests' => $this->article->getLatest(5),
            'share' => ShareFacade::page(url()->full(), 'Share title')
                ->facebook()
                ->twitter()
                ->telegram()
                ->whatsapp()
                ->getRawLinks(),
        ];

        return view('landing.pages.articles.detail_article', $data);
    }
}
