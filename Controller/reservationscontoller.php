<?php 

class reservationscontoller{

    public function getAllReservations(){
        $reservations = reservations::getAll();
        return $reservations;

    }
    public function getMyReservations(){
        $reservations = reservations::getMy();
        return $reservations;

    }
    
    public function add(){
              if(isset($_POST['submit'])){

                // var_dump();
                // exit;
            // $data = array(
            //     'fullname' => $_POST['fullname'],
            //     'email' => $_POST['email'],
            //     'passportid' => $_POST['passportid'],
            //     'flightDate' => $_POST['flightDate'],
            //     'flightTime' => $_POST['flightTime'],
            //     'departCity' => $_POST['departCity'],
            //     'arriveCity' => $_POST['arriveCity'],
            //     'Price' => $_POST['Price'],
            //     'userid' => $_POST['userid'],
            // );
            $result = reservations::add($_POST);
            
                Session::set('success', 'Flight added succesfully!!');
                Redirect::to('home');
            
              
        }
    }

}

?>