<?php
namespace Ess\App\controller;
use Ess\App\model\ArticleModel;
use Ess\App\model\AbonnementModel;


class ArticlesController extends Controller
{

   /*************Liste des produits************** */
    public function affichageArticle()


    {
        $model = new ArticleModel();
        $articles = $model->listArticle();
        $view = 'articles/listArticles';
        $paramView = ['articles' => $articles];
        $this->createView($view, $paramView);
    }

}