<?php
namespace Ess\App\controller;
use Ess\App\model\UserModel;
use Ess\App\entities\User;

class UserController extends Controller
{
/*********************************connexion********** */
    public function connect()
    {
        $paramView = ['error' => ''];
        $this->createView('user/connect', $paramView);
    }


    public function verif()
    {
        var_dump("Entrée dans la méthode verif");
        // vérification du formaulaire de login
        try {
            // appel de la fonction de vérification des données de connexion
            $model = new UserModel();
            $model->verifUser();
            header('Location: index.php');
            // demande de redirection au navigateur
            exit();
        } catch (\Exception $err) {
            // erreur d'authentification
            $paramView = ['error' => $err->getMessage()];
            $this->createView('user/connect', $paramView);
        }
        var_dump("sortie de la méthode verif");
    }
/***********************************Création de compte**************** */
    public function  createUser()
    {

        try {
            $result = new UserModel();
            $result->insertUser();
            $lastname = $_POST['lastname']; // Récupérer le lastname d'utilisateur 
            $_SESSION['lastname'] = $lastname;

            header('Location: index.php');
            exit();
        } catch (\Exception $err) {
            // erreur d'authentification
            $paramView = ['error' => $err->getMessage()];
            $this->createView('user/compte', $paramView);
        }
    }



    public function logout()
    {

        session_destroy();
        header('Location: index.php');
        exit();
    }

   
}


