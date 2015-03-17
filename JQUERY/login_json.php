<?php
    $dbc = mysqli_connect('172.30.10.172', 'guillem', 'guillem', 'sirius_db')
        or die('Error connecting to MySQL server.');
    $usuari=$_GET['usuari'];
    $password=$_GET['password'];
    $sql="SELECT password,nom,llinatge1,llinatge2 FROM 
    sirius_db.users where usuari='$usuari'";
    $result = mysqli_query($dbc, $sql) 
    or die('Error querying database.');
    $row = mysqli_fetch_array($result);
    $rows=array();
    
    if ($password==$row['password']){
            $rows[]="s";
            $rows[]=$row['nom'];
            $rows[]=$row['llinatge1'];
            $rows[]=$row['llinatge2'];
    }else{
            $rows[]="n";
    }
    echo json_encode($rows);
?>
