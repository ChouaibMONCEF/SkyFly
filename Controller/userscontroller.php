<?php 

class UsersController {    

    public function auth(){
        if(isset($_POST['submit'])){
            $data['email'] = $_POST['email'];
            $result = user::login($data);
            if($result->email === $_POST['email'] && password_verify($_POST['pswrd'], $result->pswrd) ){
                $_SESSION['logged'] = true ;
                $_SESSION['fullname'] = $result->fullname ;
                $_SESSION['id'] = $result->id ;
                Session::set('success', 'Logged in Successfully');
                Redirect::to('home');
            }
            else{
                Session::set('error', 'Email or password is incorrect ');
                Redirect::to('login');
            }
        }
    }
    public function getId(){
        if(isset($_POST['id'])){
            $data = array(
                'id' => $_POST['id']
            );
            $user = user::getId($data);
            return $user;
    }
}



    public function register(){
        if(isset($_POST['submit'])){
            $options = [
                'cost' => 12
            ];
            $password = password_hash($_POST['pswrd'], PASSWORD_BCRYPT);
            $data = array(
                'fullname' => $_POST['fullname'],
                'email' => $_POST['email'],
                'pswrd' => $password,
                'passportid' => $_POST['passportid'],
                'birthdate' => $_POST['birthdate']
            );
            $result = user::createUser($data);
            if($result === 'ok'){
                Session::set('success', 'Registered Successfully');
                Redirect::to('login');
            }else{
                echo $result;
            }
        }
    }

    static public function logout(){
        session_destroy();
    }

}

?>