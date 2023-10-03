<?php

namespace App\Contracts\Repositories;

use App\Contracts\Interfaces\ArticleInterface;
use App\Models\Article;
use App\Traits\Datatables\ArticleDatatable;
use Exception;
use Illuminate\Database\QueryException;

class ArticleRepository extends BaseRepository implements ArticleInterface
{

    use ArticleDatatable;

    public function __construct(Article $article)
    {
        $this->model = $article;
    }

    /**
     * Handle get data instantly from models using datatables.
     *
     * @return mixed
     * @throws Exception
     */
    public function datatable(): mixed
    {
        return $this->ArticleMockup($this->model->query()->with('category'));
    }

    /**
     * Handle show method and delete data instantly from models.
     *
     * @param mixed $id
     *
     * @return mixed
     */
    public function delete(mixed $id): mixed
    {
        try {
            return $this->model->query()
                ->findOrFail($id)
                ->delete();
        } catch (QueryException $e) {
            if ($e->errorInfo[1] == 1451) return false;
        }

        return true;
    }

    /**
     * Handle the Get all data event from models.
     *
     * @return mixed
     */
    public function get(): mixed
    {
        // TODO: Implement get() method.
    }

    /**
     * Handle store data event to models.
     *
     * @param array $data
     *
     * @return mixed
     */
    public function store(array $data): mixed
    {
        return $this->model->query()
            ->create($data);
    }

    /**
     * Handle show method and update data instantly from models.
     *
     * @param mixed $id
     * @param array $data
     *
     * @return mixed
     */
    public function update(mixed $id, array $data): mixed
    {
        return $this->model->query()
            ->findOrFail($id)
            ->update($data);
    }

    /**
     * Handle count all data event from models.
     *
     * @param array|null $data
     *
     * @return int
     */
    public function count(?array $data): int
    {
        return $this->model->query()
            ->count();
    }
}
