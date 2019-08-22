<?php
    $rid = $_GET['rid'];


    $con = mysql_connect("localhost","root","");

    mysql_select_db("tennis",$con);

    $sql="Delete from player where rid=$rid";

    echo $sql;

    $result=mysql_query($sql,$con);

    if($result){
        header("Location:deletereader.php");
    }else{
        echo "Record cannot be deleted !!";
    }

?>