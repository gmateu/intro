    <?php
    $dbc = mysqli_connect('172.30.10.172', 'guillem', 'guillem', 'sirius_db')
        or die('Error connecting to MySQL server.');
        
    $sql="select id,usuari,nom,llinatge1,llinatge2 from users";
    $result = mysqli_query($dbc, $sql) or die('Error querying database.');
    $rows=array();
    while($row = mysqli_fetch_array($result)){
        $rows[]=$row;
    }
    echo json_encode($rows);
    ?>
