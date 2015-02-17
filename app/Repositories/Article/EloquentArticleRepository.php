<?php namespace App\Repositories\Article;

use App\Repositories\EloquentRepository;

class EloquentArticleRepository extends EloquentRepository implements ArticleRepositoryInterface {

    /**
     * @var Member
     */
    public $model;

    function __construct( \App\Article $model)
    {
        $this->model = $model;
    }

}