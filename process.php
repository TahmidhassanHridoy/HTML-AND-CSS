<?php
if (isset($_POST["FIRSTNAME"])) {
    if (isset($_POST["MIDDLENAME"])) {
        if (isset($_POST["LASTNAME"])) {
                if (isset($_POST["ID"])) {

                                echo "Name:"," ",$_POST["FIRSTNAME"]," ",$_POST["MIDDLENAME"]," ",$_POST["LASTNAME"]," ","ID:"," ",$_POST["ID"];

                            
                 }else{
                     header("location:index.php");
                 }
         }else{
            header("location:index.php");
        }
    }else{
        header("location:index.php");
    }
}
?>