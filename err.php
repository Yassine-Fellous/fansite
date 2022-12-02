<?php
if(isset($_SESSION['mess'])) { 
    echo "$_SESSION[mess]" . "<br>"; 
}
    unset($_SESSION['mess']);
