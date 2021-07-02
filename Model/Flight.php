<?php 

class Flight {
    static public function getAll(){
        $stmt = DB::connect()->prepare('SELECT * FROM flight');
        $stmt->execute();
        return $stmt->fetchAll();
        // $stmt->close();
        $stmt = null;
    }

    static public function getFlight($data){
        $id = $data['id'];
        try{
            $query = 'SELECT * FROM flight WHERE id=:id';
            $stmt = DB::connect()->prepare($query);
            $stmt->execute(array(":id" => $id ));
            $flight = $stmt->fetch(PDO::FETCH_OBJ);
            return $flight;
        }catch(PDOException $ex){
            echo 'error' .$ex->getMessage();
        }
    }

    static public function add($data){
        $stmt = DB::connect()->prepare('INSERT INTO flight (flightDate , flightTime, departCity, arriveCity, Price, places) VALUES (:flightDate , :flightTime, :departCity, :arriveCity, :Price, :places)');
        $stmt->bindParam(':flightDate',$data['flightDate']);
        $stmt->bindParam(':flightTime',$data['flightTime']);
        $stmt->bindParam(':departCity',$data['departCity']);
        $stmt->bindParam(':arriveCity',$data['arriveCity']);
        $stmt->bindParam(':Price',$data['Price']);
        $stmt->bindParam(':places',$data['places']);

        if($stmt->execute()){
            return 'ok';
        }else{
            return 'error';
        }
        $stmt = null;
    }

    static public function update($data){
        $stmt = DB::connect()->prepare('UPDATE flight SET flightDate = :flightDate , flightTime = :flightTime , departCity = :departCity , arriveCity = :arriveCity , Price = :Price , places = :places WHERE id = :id ');
        $stmt->bindParam(':id',$data['id']);
        $stmt->bindParam(':flightDate',$data['flightDate']);
        $stmt->bindParam(':flightTime',$data['flightTime']);
        $stmt->bindParam(':departCity',$data['departCity']);
        $stmt->bindParam(':arriveCity',$data['arriveCity']);
        $stmt->bindParam(':Price',$data['Price']);
        $stmt->bindParam(':places',$data['places']);

        if($stmt->execute()){
            return 'ok';
        }else{
            return 'error';
        }
        $stmt = null;
    }

    static public function delete($data){
        $id = $data['id'];
        try{
            $query = ('DELETE FROM flight WHERE id =:id');
            $stmt = DB::connect()->prepare($query);
            $stmt->execute(array(":id" => $id ));
            if($stmt->execute()){
            return 'ok';
            }
        }catch(PDOException $ex){
            echo 'error' .$ex->getMessage();
        }
    }
    
    static public function searchFlight($data){
         $search = $data['search'];
        try{
            $query = ('SELECT * FROM flight WHERE departCity LIKE ? OR arriveCity LIKE ?');
            $stmt = DB::connect()->prepare($query);
            $stmt->execute(array('%'.$search.'%','%'.$search.'%'));
            return $flights = $stmt->fetchAll();
        }catch(PDOException $ex){
            echo 'error' .$ex->getMessage();
        }
    }

    static public function availableFlights($data){
         $departCity = $data['departCity'];
         $arriveCity = $data['arriveCity'];
         $flightDate = $data['flightDate'];
        try{
            $query = ("SELECT * FROM flight WHERE departCity LIKE ? AND arriveCity LIKE ? AND flightDate LIKE ? ");
            $stmt = DB::connect()->prepare($query);
            $stmt->execute(array('%'.$departCity.'%','%'.$arriveCity.'%','%'.$flightDate.'%'));
            return $flights = $stmt->fetchAll();
        }catch(PDOException $ex){
            echo 'error' .$ex->getMessage();
        }
    }
    
}

?>