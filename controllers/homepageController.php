<?php 
class homepageController {
    public function homepage(){
       include (getcwd().'/views/homepage.php');
    }
    ////test///
    public function anime(){
        include (getcwd().'/views/testanime.php');
     }
}