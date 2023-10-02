<?php
namespace Ess\App\dao;
use PDO;
use PDOException;
use Exception;
use Ess\App\entities\User;
use Ess\App\model\UserModel;
class Dao {
    private ?PDO $dbconnect;
    public function __construct()
    {
        try {
            $this->dbconnect = new PDO('mysql:host=localhost;dbname=blog;charset=UTF8', 'root', '');
        } catch (PDOException $pdoExcept) {

            throw new Exception('Application non disponible actuellement');
        }
    }
    /***********Connexion********* */
    public function getUserByLogin(string $login): User
    {
        $sql = 'SELECT * FROM users WHERE email=\'' . $login . '\';';
        $userStat = $this->dbconnect->prepare($sql);
        $userStat->execute();
        var_dump($login);

        if ($userStat->rowCount() == 1) {
            $userStat->setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, 'Ess\App\entities\User'); //
            $user = $userStat->fetch();
            $userStat = NULL; // fermeture du PDO_Statement
            $this->dbconnect = NULL;
            return $user;
        } else {
            $userStat = NULL;
            $this->dbconnect = NULL; // fermeture de la connexion
            throw new Exception('User non trouvé en base');
        }
    }

/*********************Création de compte************** */

    public function setUser( $firstname, $lastname, $email, $password, $role , $phone, $adress, $registerdate , $abonne)
    {
        $sql = 'INSERT INTO users ( firstname, lastname, email, password,role,  phone, adress , registerdate , abonne) VALUES (:firstname,:lastname,:email, :password, :role,   :phone, :adress , :registerdate , :abonne)';
        $user_stat = $this->dbconnect->prepare($sql);
        $user_stat->bindParam(':firstname', $firstname);  
        $user_stat->bindParam(':lastname', $lastname);
        $user_stat->bindParam(':email', $email);
        $user_stat->bindParam(':password', $password);
        $user_stat->bindParam(':role', $role);

        $user_stat->bindParam(':phone', $phone);
        $user_stat->bindParam(':adress', $adress);
        $user_stat->bindParam(':registerdate', $registerdate);
        $user_stat->bindParam(':abonne', $abonne);

        $user_stat->execute();
    }
    
}
   

   

    