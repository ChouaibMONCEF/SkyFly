<?php 

class admincontroller{

    public function adminauth(){
        if(isset($_POST['submit'])){
            $data['username'] = $_POST['username'];
            $result = admin::login($data);
            if($result->username === $_POST['username'] && password_verify($_POST['pswrd'], $result->pswrd) ){
                $_SESSION['admin'] = true ;
                $_SESSION['fullname'] = $result->fullname ;
                Session::set('success', 'Logged in Successfully');
                Redirect::to('admin');
            }
            else{
                Session::set('error', 'username or password is incorrect ');
                Redirect::to('adminlogin');
            }
        }
    }
}

?>