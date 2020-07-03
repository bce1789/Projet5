<?php
namespace App\controllers;
class homepageController {
    public function homepage(){
       include (getcwd().'/views/homepage.php');
    }
}