<?php 
    require_once 'Controller/homecontroller.php';

    $home = new Hcontroller();

    $pages = ['home', 'Register', 'login', 'admin'];
    // $home->index('home');
    if(isset($_GET['page'])){
        if(in_array($_GET['page'], $pages)){
            $page = $_GET['page'];
            $home->index($page);
        }else{
            include('View/includes/404.php');
        }
    }
    

?>