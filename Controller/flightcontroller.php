<?php 

class flightController{
    public function getAllFlights(){
        $flights = Flight::getAll();
        return $flights;

    }

    public function getOneFlight(){
        if(isset($_POST['id'])){
            $data = array(
                'id' => $_POST['id']
            );
            $flight = flight::getFlight($data);
            return $flight;
    }
    }

    public function findFlights(){
        if(isset($_POST['search'])){
            $data = array('search' => $_POST['search']);
        }
        $flights = flight::searchFlight($data);
        return $flights;
    }

    public function addFlight(){
        if(isset($_POST['submit'])){
            $data = array(
                'flightDate' => $_POST['flightDate'],
                'flightTime' => $_POST['flightTime'],
                'departCity' => $_POST['departCity'],
                'arriveCity' => $_POST['arriveCity'],
                'Price' => $_POST['Price'],
                'places' => $_POST['places'],
            );
            $result = flight::add($data);
            if($result === 'ok'){
                Session::set('success', 'Flight added succesfully!!');
                Redirect::to('admin');
            }else{
                echo $result;
            }
        }
    }

    public function updateFlight(){
        if(isset($_POST['submit'])){
            $data = array(
                'id' => $_POST['id'],
                'flightDate' => $_POST['flightDate'],
                'flightTime' => $_POST['flightTime'],
                'departCity' => $_POST['departCity'],
                'arriveCity' => $_POST['arriveCity'],
                'Price' => $_POST['Price'],
                'places' => $_POST['places'],
            );
            $result = flight::update($data);
            if($result === 'ok'){
                 Session::set('success', 'Flight updated succesfully!!');
                header('location:' .BASE_URL);
            }else{
                echo $result;
            }
        }
    }
    public function deleteFlight(){
        if(isset($_POST['id'])){
            $data['id'] = $_POST['id'];
            $result = Flight::delete($data);
            if($result === 'ok'){
                 Session::set('success', 'Flight deleted succesfully!!');
                Redirect::to('admin');
            }else{
                echo $result;
            }
        }
    }

    public function availableFlights(){
        if(isset($_POST['departCity']) && isset($_POST['arriveCity']) && isset($_POST['flightDate']) ){
            $data = array(
                'departCity' => $_POST['departCity'],
                'arriveCity' => $_POST['arriveCity'],
                'flightDate' => $_POST['flightDate'],
            );
            
        }
        $flights = flight::availableFlights($data);
        return $flights;
    }
}

?>