<?php 
    setcookie('Aula_Javascript', '1', time()+3600);

    if(isset ($_COOKIE['Aula_Javascript'])){
        setcookie('Aula_Javascript', null, time()-3600);
        echo "<p>Cookie eliminado</p>";
    }

?>