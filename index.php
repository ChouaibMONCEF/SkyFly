<?php
    include_once('View/includes/alerts.php');
    require_once './autoload.php';
    require_once 'Database/Database.php';
    require_once 'Controller/homecontroller.php';
    require_once 'Controller/flightcontroller.php';

    $home = new Hcontroller();
    $publicpages = ['Register', 'login', 'adminlogin'];
    $adminpages = ['flight', 'addflight' , 'delete' ,'update', 'logout','reservations' ,'admin'];
    $pages = ['logout', 'home', 'availableFlights','Reserve', 'myreservations'];
    $allpages = ['logout', 'home', 'availableFlights','Reserve', 'myreservations', 'flight', 'addflight' , 'delete' ,'update', 'logout','reservations' ,'admin','Register', 'login', 'adminlogin'];
    
    

    $page = $_GET['page'];
    $fpage = filter($page)[0];

    function filter($str){

        // $result = str_replace(array("/"), '', $str);
        $result = explode("/", $str);


        return $result;
    }

    
    
    if (isset($_GET['page'])) {
        if (in_array($fpage, $publicpages)) {
            $home->index($fpage);
        }
    }
   
    
    if (isset($_SESSION['admin']) && $_SESSION['admin'] === true) {
        if (isset($_GET['page'])) {
            if (in_array($fpage, $adminpages)) {
                
                $home->index($fpage);
            }
        } else {
            $home->index('login');
        }
    }
    
    if (isset($_SESSION['logged']) && $_SESSION['logged'] === true) {
        if (isset($_GET['page'])) {
            if (in_array($fpage, $pages)) {
                
                $home->index($fpage);
            }
        }
    }

    if (isset($_GET['page'])) {
        if (!in_array($fpage, $allpages)) {
            echo "Error 404";
        }
    }

    if (!isset($_GET['page'])) {
        Redirect::to('login');
    }

    
    
?> 