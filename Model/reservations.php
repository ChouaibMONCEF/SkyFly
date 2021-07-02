<?php 

    class reservations{

        static public function getAll(){
        $stmt = DB::connect()->prepare('SELECT * FROM reservations');
        $stmt->execute();
        return $stmt->fetchAll();
        // $stmt->close();
        $stmt = null;
    }

    static public function getMy(){
        $userid = $_SESSION['id'];
        $stmt = DB::connect()->prepare("SELECT * FROM reservations WHERE userid = '$userid'");
        $stmt->execute();
        return $stmt->fetchAll();
        // $stmt->close();
        $stmt = null;
    }

        static public function add($data){
        

        //     echo "<pre>";
        // foreach ($data as $key => $value) {
        //    print_r($value);
        // }

        $conFirstTime =  DB::connect();
        $counter = $data['counter'];
        

        for ($i=0; $i < $counter ; $i++) { 
        
        $fullname = $data['fullname'][$i];
        $email = $data['email'][$i];
        $passportid = $data['passportid'][$i];
        $flightDate = $data['flightDate'][$i];
        $flightTime = $data['flightTime'][$i];
        $departCity = $data['departCity'][$i];
        $arriveCity = $data['fullname'][$i];
        $Price = $data['Price'][$i];
        $userid = $data['userid'][$i];
        $stmt = $conFirstTime->prepare('INSERT INTO reservations (fullname , email, passportid, flightDate , flightTime, departCity, arriveCity, Price, userid) VALUES (:fullname , :email, :passportid, :flightDate , :flightTime, :departCity, :arriveCity, :Price, :userid)');
        $stmt->bindParam(':fullname',$fullname);
        $stmt->bindParam(':email',$email);
        $stmt->bindParam(':passportid',$passportid);
        $stmt->bindParam(':flightDate',$flightDate);
        $stmt->bindParam(':flightTime',$flightTime);
        $stmt->bindParam(':departCity',$departCity);
        $stmt->bindParam(':arriveCity',$arriveCity);
        $stmt->bindParam(':Price',$Price);
        $stmt->bindParam(':userid',$userid);
        $stmt->execute();
    }
    
    }

    static public function getUserReservation(){
        $stmt = DB::connect()->prepare('SELECT * FROM reservations');
        $stmt->execute();
        return $stmt->fetchAll();
        // $stmt->close();
        $stmt = null;
    }

    }

?>