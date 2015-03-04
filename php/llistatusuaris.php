<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
	<title>untitled</title>
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />
	<meta name="generator" content="Geany 1.23.1" />
</head>

<body>
    <?php
    $dbc = mysqli_connect('172.30.10.172', 'guillem', 'guillem', 'sirius_db')
        or die('Error connecting to MySQL server.');
        
   if (isset($_POST['submit'])){
       echo "esborrar usuaris<br>";
       foreach ($_POST['todelete'] as $delete_id){
           echo "...esborrant $delete_id<br>";
           $sql="DELETE FROM users where id=$delete_id";
           $result = mysqli_query($dbc, $sql) or die('Error querying database.');
       }
       
    }     
        
    $sql="select id,usuari,nom,llinatge1,llinatge2 from users";
    $result = mysqli_query($dbc, $sql) or die('Error querying database.');
    
    
    ?>
    <table border="1">
        <tr>
            <th>&nbsp;</th>
            <th>usuari</th>
            <th>nom</th>
            <th>Llinatge1</th>
            <th>Llinatge2</th>
        </tr>
        
    <form method="post" action="llistatusuaris.php">    
    <?php
    while($row = mysqli_fetch_array($result)){
        ?>
        <tr>
            <td><input type="checkbox" value="<?= $row['id']?>" name="todelete[]" /></td>
            <td><a href="updateuser.php?id=<?= $row['id']?>"><?=$row['usuari']?></a></td>
            <td><?=$row['nom']?></td>
            <td><?=$row['llinatge1']?></td>
            <td><?=$row['llinatge2']?></td>
        </tr>
        
        <?php
        }
    ?>
	</table>
    <input type="submit" name="submit" value="esborrar seleccionats" />
    </form>
</body>

</html>
