<?php

    namespace Edu\board\Support;

    use Edu\Board\Support\Database;
    use PDO;

    /**
     *  Auth management
     */
    class Auth extends Database
    {

        /**
         * login management System
         */
        public function userLoginSystem ($email_uname, $pass )
        {
            $data = $this -> emailUsernameCheck($email_uname);

            $num = $data['num'];
            $login_user_data = $data['data'] -> fetch(PDO:: FETCH_ASSOC);

            if( $num == 1 ){
                if( password_verify( $pass, $login_user_data['pass'] ) ){
                    // session value get
                    $_SESSION['id'] = $login_user_data['id'];
                    $_SESSION['name'] = $login_user_data['name'];
                    $_SESSION['uname'] = $login_user_data['uname'];
                    $_SESSION['role'] = $login_user_data['role'];
                    $_SESSION['photo'] = $login_user_data['photo'];
                    $_SESSION['email'] = $login_user_data['email'];
                    $_SESSION['cell'] = $login_user_data['cell'];

                    header('location:dashboard.php');
                }else{
                    return "<p class=\"alert alert-warning\">Wrong Password! <button class=\"close\" data-dismiss=\"alert\">&times;</button></p>";
                }
            }else{
                return "<p class=\"alert alert-warning\">Email or Username is Inccorect! <button class=\"close\" data-dismiss=\"alert\">&times;</button></p>";

            }
            
        }

        /**
         *  username validation check
         */
        public function emailUsernameCheck($email_uname)
        {
            return $this -> dataCheck( 'users', $email_uname ); 
        }

    }







?>