<?php

namespace Ess\App\model;

use Ess\App\dao\Dao;
use Exception;
use Ess\App\entities\User;

class UserModel
{
/***********************Vérification **********/
    public function verifUser(): void
    {
        $login = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
        $password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_SPECIAL_CHARS);
        var_dump($login);
        var_dump($password);
        if ($login) {

            $dao = new Dao();
            $user = $dao->getUserByLogin($login); // leve une Exception si user non trouvé
var_dump($user);
            if (password_verify($password, $user->getPassword())) {    // simulation de la valeur de mot de passe

                $_SESSION['email'] = $user->getEmail();
                $_SESSION['role'] = $user->getRole();

                $_SESSION['lastname'] = $user->getLastname();

            } else {
                throw new Exception('Mot de passe incorrect !');
            }
        } else {
            throw new Exception('le login doit être un mail valide');
        }
    }
    public function insertUser()
    {
        $dao = new Dao();
        // récupération des données du $_POST
        $firstname = filter_input(INPUT_POST, 'firstname', FILTER_SANITIZE_SPECIAL_CHARS);
        $lastname = filter_input(INPUT_POST, 'lastname', FILTER_SANITIZE_SPECIAL_CHARS);
        $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_SPECIAL_CHARS);
        $password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_SPECIAL_CHARS);
        $password = password_hash($password, PASSWORD_DEFAULT);

        $role = filter_input(INPUT_POST, 'role', FILTER_SANITIZE_SPECIAL_CHARS);
        $phone = filter_input(INPUT_POST, 'phone', FILTER_SANITIZE_SPECIAL_CHARS);
        $adress = filter_input(INPUT_POST, 'adress', FILTER_SANITIZE_SPECIAL_CHARS);
        $registerdate = filter_input(INPUT_POST, 'registerdate', FILTER_SANITIZE_SPECIAL_CHARS);
        $abonne = filter_input(INPUT_POST, 'abonne', FILTER_SANITIZE_SPECIAL_CHARS);

        if (!isset($role) || !is_string($role)) {
            throw new Exception('Le rôle doit être une chaîne de caractères.');
        }

        $user = new User($firstname,$lastname, $email, $password,  $role, $phone, $adress, $registerdate , $abonne);

        try {
            $dao->setUser($user->getFirstname(),$user->getLastname(), $user->getEmail(), $user->getPassword(),$user->getRole(),   $user->getPhone(), $user->getAdress(), $user->getRegisterDate() ,  $user->getAbonne(),);
        } catch (\PDOException $e) {
            throw new Exception("Error inserting user: " . $e->getMessage());
        }
        try {
            // exécution de la requête d'insertion ici
        } catch (\PDOException $e) {
            // gestion des erreurs ici, par exemple :
            echo "Erreur d'insertion : " . $e->getMessage();
        }
    }




   
}