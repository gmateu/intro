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
    $id=$_GET['id'];
    echo "id: $id<br>";
    $dbc = mysqli_connect('172.16.82.211', 'guillem', 'guillem', 'sirius_db')
        or die('Error connecting to MySQL server.');
    $sql="select usuari,nom,llinatge1,llinatge2 from users where id=$id";
    $result = mysqli_query($dbc, $sql) or die('Error querying database.');
    $row = mysqli_fetch_array($result);
    
    $usuari=$row['usuari'];
    $nom=$row['nom'];
    $llinatge1=$row['llinatge1'];
    $llinatge2=$row['llinatge2'];
    
    
    ?>
    
    <h1>Editar usuari</h1>
    <form method="post" action="updateuser.php">
        <label for="usuari">Usuari:</label>
        <input type="text" id="usuari" name="usuari" value="<?=$usuari?>" /><br />
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" value="<?=$password?>" /><br />
        <label for="nom">Nom:</label>
        <input type="text" id="nom" name="nom" value="<?=$nom?>" /><br />
        <label for="llinatge1">llinatge1:</label>
        <input type="text" id="llinatge1" name="llinatge1" value="<?=$llinatge1?>" /><br />
        <label for="llinatge2">llinatge2:</label>
        <input type="text" id="llinatge2" name="llinatge2" value="<?=$llinatge2?>" /><br />
        
        <input type="submit" value="Desar" name="submit" />
    </form>
	
</body>

</html>
