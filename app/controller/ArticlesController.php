<?php
namespace Ess\App\controller;
use Ess\App\model\ArticleModel;
use Ess\App\model\AbonnementModel;


class ArticlesController extends Controller
{

   /*************Liste des produits************** */
    public function listArticle()
    {
        $model = new ArticleModel();
        $article = $model->listArticle();
        $view = 'articles/listarticles';
        $paramView = ['article' => $article,];
        $this->createView($view, $paramView);
    }

}