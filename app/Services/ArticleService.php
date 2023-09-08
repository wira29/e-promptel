<?php

namespace App\Services;

use App\Enums\UploadDiskEnum;
use App\Http\Requests\Article\StoreRequest;
use App\Http\Requests\Article\UpdateRequest;
use App\Models\Article;
use App\Traits\UploadTrait;

class ArticleService
{
    use UploadTrait;

    /**
     * Handle store article into tables
     *
     * @param StoreRequest $request
     * @return array
     */

    public function store(StoreRequest $request): array
    {
        $data = $request->validated();

        if ($request->hasFile('thumbnail')) {
            $data['thumbnail'] = $this->upload(UploadDiskEnum::ARTICLES->value, $request->file('thumbnail'));
        }

        return $data;
    }

    /**
     * Handle update article into tables
     *
     * @param Article $article
     * @param UpdateRequest $request
     * @return array
     */

    public function update(Article $article, UpdateRequest $request): array
    {
        $data = $request->validated();
        $data['thumbnail'] = $article->thumbnail;

        if ($request->hasFile('thumbnail')) {
            $this->remove($data['thumbnail']);
            $data['thumbnail'] = $this->upload(UploadDiskEnum::ARTICLES->value, $request->file('thumbnail'));
        }

        return $data;
    }

}
