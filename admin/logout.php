<?php

session_start();

if(isset($_SESSION['id'])){

    session_destroy();
    header('Location: index.php?msg=2');

}
else{

    header('Location: index.php?msg=2');
}


?>