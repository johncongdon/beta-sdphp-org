<?php  namespace app\Repositories\Article;


interface ArticleRepositoryInterface {
    public function getAll();
    public function getById();
}