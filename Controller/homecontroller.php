<?php 

class Hcontroller{
    public function index($page){
        include('view/'.$page.'.php');
    }
}
?>