<?php

namespace App\Http\Controllers\Dashboard;

use App\Contracts\Interfaces\ArticleInterface;
use App\Contracts\Interfaces\CategoryInterface;
use App\Http\Controllers\Controller;
use App\Http\Requests\Article\StoreRequest;
use App\Http\Requests\Article\UpdateRequest;
use App\Models\Article;
use App\Services\ArticleService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ArticleController extends Controller
{
    private ArticleInterface $article;
    private CategoryInterface $category;
    private ArticleService $service;

    public function __construct(ArticleInterface $article, CategoryInterface $category, ArticleService $service)
    {
        $this->article = $article;
        $this->category = $category;
        $this->service = $service;
    }

    /**
     * Display a listing of the resource.
     *
     * @param Request $request
     * @return View|JsonResponse
     */
    public function index(Request $request): View|JsonResponse
    {
        if ($request->ajax()) return $this->article->datatable();
        return view('dashboard.pages.articles.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return View
     */
    public function create(): View
    {
        $categories = $this->category->get();
        return view('dashboard.pages.articles.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StoreRequest $request
     * @return RedirectResponse
     */
    public function store(StoreRequest $request): RedirectResponse
    {
        $this->article->store($this->service->store($request));
        return to_route('articles.index')->with('success', trans('alert.add_success'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Article $article
     * @return View
     */
    public function edit(Article $article): View
    {
        $categories = $this->category->get();
        return view('dashboard.pages.articles.edit', compact('article', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UpdateRequest $request
     * @param Article $article
     * @return RedirectResponse
     */
    public function update(UpdateRequest $request, Article $article): RedirectResponse
    {
        $this->article->update($article->id, $this->service->update($article, $request));

        return to_route('articles.index')->with('success', trans('alert.update_success'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Article $article): RedirectResponse
    {
        $destroy = $this->article->delete($article->id);

        if (!$destroy) return back()->with('errors', trans('alert.delete_constrained'));

        $this->service->remove($article->thumbnail);

        return back()->with('success', trans('alert.delete_success'));
    }
}
