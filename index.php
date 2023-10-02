<?php
require 'vendor/autoload.php';

use Ess\App\controller\UserController;
use Ess\App\controller\AppController;


            $controller = new AppController();
            $controller->execute('accueil');
        
            session_start();


