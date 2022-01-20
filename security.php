<?php
class Authentication{
    static function login( $uid ){        
        //$_SESSION['authenticated'] = true;
        $_SESSION['uid'] = $uid;
    }
    static function check(){
        return isset( $_SESSION['uid'] );
    }
    static function uid(){
        return $_SESSION['uid'];
    }
    static function logout(){
        // session_unset();
        // session_destroy();
        unset( $_SESSION['uid'] );
    }
}


class Authorization{

	static function issAdmin($roll)
    if($roll==0)
		$_SESSION['user_type'] = 'public';

        else if($roll==1)
        $_SESSION['user_type'] = 'admin';
        {
            static function checkAdmin(){
               if($_SESSION['user_type'] == 'admin') 
               return true;
            }
        }

	
	/*static function check()
	{
		return isset($_SESSION['roll']);
	}
	
	static function Rolls()
	{
		return $_SESSION['roll'];
	}
}
*/



?>