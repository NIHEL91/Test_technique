<?php
namespace Ess\App\entities;

use DateTime;

class User {

    private ?int $idUser;
    private string $firstname;
    private string $lastname;
    private string $email;

    private string $password;
    private string $role;

    private int $phone;
    private string $adress;
    private string $registerdate;
    private int $abonne;



    public function __construct(  string $firstname ='', string $lastname = '' ,string $email = '',string $password = '' ,  string $role = ''    , int $phone = 0
    , string $adress = '' , ?string $registerdate = null ,int  $abonne) {
 
        $this->idUser = null; 
        $this->firstname = $firstname;
        $this->lastname = $lastname;
        $this->email = $email;
        $this->password = password_hash($password, PASSWORD_DEFAULT);

        $this->role = $role;
        $this->phone = $phone;
        $this->adress = $adress;
        $this->registerdate = date_format(new DateTime() , 'Y-m-d');
        $this->abonne = $abonne;
        

    }



    public function getId(){
        return $this->idUser;
    }
    public function getFirstname(){
        return $this->firstname;
    }
    public function getLastname(){
        return $this->lastname;
    }
    public function getEmail(){
        return $this->email;
    }
    public function getPassword(){
        return $this->password;
        
    }
    public function getRole(){
        return $this->role;
    }   
  public function getPhone(){
        return $this->phone;
    }

    public function getAdress(){
        return $this->adress;
    }
 public function getRegisterDate(){
        return $this->registerdate;
    }
    public function getAbonne(){
        return $this->abonne;
        
    }  

}