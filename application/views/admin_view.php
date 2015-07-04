<?php
if(isset($_SESSION['isauth']) && ($_SESSION['isauth']==TRUE))
    {
        echo '<p align="right">Добро пожаловать, '.$_SESSION['login'] .''
                . ' <a href="/auth/logout/">Выйти</a>'
                . '</br> '
                . '<a href="/admin">Панель Администратора</a></p>';
    }
else 
    {
        echo '
<nav class="navbar navbar-default">
  
   
    
        <form id="signin" class="navbar-form navbar-right" role="form" method="POST" action="/admin/index">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                            <input id="email" type="text" class="form-control" name="login" value="" placeholder="Логин">                                        
                        </div>

                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                            <input id="password" type="text" class="form-control" name="pass" value="" placeholder="Пароль">                                        
                        </div>

                        <button type="submit" class="btn btn-primary">Вход</button>
                   </form>
     
    
  </div>
</nav>';
}
?>