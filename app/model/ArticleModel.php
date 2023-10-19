<?php
namespace Ess\App\model;
use Ess\App\controller\ArticlesController;
use Ess\App\dao\Dao;
use Ess\App\entities\Article;
use Exception;

class ArticleModel {
   //Liste des produits 
    public function listArticle(){

        $dao = new Dao();
        $tabArticle = $dao->getAllArticle();
        return $tabArticle;
    }}