<?php

class Model_Avtoriz extends Model
{
    public function avtoriz()
    {
       $login = $_POST['login'];
       $pass = $_POST['pass'];
       $conn=$this->connectBD();
       $sel = $conn -> query("SELECT * FROM avtoriz WHERE login='$login'");
       if ($sel) 
       {
            $arr = $sel -> fetch_assoc();
		if ($arr['pass'] == $pass) 
                {
                    $_SESSION['isauth'] = TRUE;
                    $_SESSION['login'] = $login;
                    header('location: /admin');
		}
		else 
                {
                    header('location: /main');
		}
        }
        else
        {
            header('location: /main');
	}         
    }
    public function logout()
    {
        unset($_SESSION['isauth']);
        header('location: /');
    }
            
}