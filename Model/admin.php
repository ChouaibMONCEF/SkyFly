<?php 

class admin{
    static public function login($data){
        $username = $data['username'];
        
        try{
            $query = ('SELECT * FROM admins WHERE username =:username');
            $stmt = DB::connect()->prepare($query);
            $stmt->execute(array(":username" => $username));
            $admin = $stmt->fetch(PDO::FETCH_OBJ);
            return $admin;
            if($stmt->execute()){
            return 'ok';
            }
        }catch(PDOException $ex){
            echo 'error' .$ex->getMessage();
        }
    }
}


?>