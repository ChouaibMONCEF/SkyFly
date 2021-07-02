<?php 

class user {

    static public function login($data){
        $email = $data['email'];
        
        try{
            $query = ('SELECT * FROM persons WHERE email =:email');
            $stmt = DB::connect()->prepare($query);
            $stmt->execute(array(":email" => $email));
            $user = $stmt->fetch(PDO::FETCH_OBJ);
            return $user;
            if($stmt->execute()){
            return 'ok';
            }
        }catch(PDOException $ex){
            echo 'error' .$ex->getMessage();
        }
    }

    static public function createUser($data){
        $stmt = DB::connect()->prepare('INSERT INTO persons (fullname , email, pswrd, passportid, birthdate) VALUES (:fullname , :email, :pswrd, :passportid, :birthdate)');
        $stmt->bindParam(':fullname',$data['fullname']);
        $stmt->bindParam(':email',$data['email']);
        $stmt->bindParam(':pswrd',$data['pswrd']);
        $stmt->bindParam(':birthdate',$data['birthdate']);
        $stmt->bindParam(':passportid',$data['passportid']);

        if($stmt->execute()){
            return 'ok';
        }else{
            return 'error';
        }
        $stmt = null;
    }
    static public function getId($data){
        $id = $data['id'];
        try{
            $query = "SELECT id FROM Users WHERE username ='".$_SESSION['username']."'";
            $stmt = DB::connect()->prepare($query);
            $stmt->execute(array(":id" => $id ));
            $user = $stmt->fetch(PDO::FETCH_OBJ);
            return $user;
        }catch(PDOException $ex){
            echo 'error' .$ex->getMessage();
        }
    }
    
}

?>