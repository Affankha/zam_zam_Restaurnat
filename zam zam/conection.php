<?php

mysqli_connect("localhost","root","","restaurant")

if(mysqli_connect_error()){
    echo "can not connect";
}
    else{
        echo "connected"
    }



?>