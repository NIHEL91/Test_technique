<?php
namespace Ess\App\entities;
use Ess\App\model\ArticleModel;


class Article {

    private ?int $idArticle;
    private string $name;
    private string $contenu;
    private string $dateRajout;
    private string $premium;
    private float $price;
    private string $image;
    

    public function __construct(  string $name = '' , string $contenu = '', string $dateRajout ='' , string $premium ='',  float $price = 0.0 ,  string $image=''  ) {
 
        $this->idArticle = null; 
        $this->name = $name;
        $this->contenu = $contenu;
        $this->dateRajout = $dateRajout;
        $this->premium = $premium;
        $this->price = $price;
        $this->image = $image;
        

    }



    public function getId(){
        return $this->idArticle;
    }
    public function getName(){
        return $this->name;
    }

    public function getContenu(){
        return $this->contenu;
    }
    public function getDate(){
        return $this->dateRajout;
    }
    public function getPremium(){
        return $this->premium;
    }
    public function getPrice(){
        return $this->price;
        
    }
    public function getImage(){
        return $this->image;
    }
   
   

}