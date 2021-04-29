<?php 

class users {
    public function register(){
        if(isset($_POST['submit'])){
            $data = array(
                'fullname' => $_POST['fullname'],
                'email' => $_POST['email'],
                'pswrd' => $_POST['pswrd'],
                'passportid' => $_POST['passportid'],
                'birthdate' => $_POST['birthdate'],
                'gender' => $_POST['r'],
            );
            $result = persons::add($data);
            if($result === 'ok'){

            }else{
                echo $result;
            }
        }
    }
}

?>