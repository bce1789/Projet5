<?php 
namespace App\controllers;
class erreurPageController {
    public function erreurPage(){
       include (getcwd().'/views/erreurPage.php');
    }
}