
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
        $usuari=$_POST['usuari'];
        $password=$_POST['password'];
        $nom=$_POST['nom'];
        $llinatge1=$_POST['llinatge1'];
        $llinatge2=$_POST['llinatge2'];
        
        $dbc = mysqli_connect('172.30.10.172', 'guillem', 'guillem', 'sirius_db')
        or die('Error connecting to MySQL server.');
        $query = "insert into users (usuari,password,nom,llinatge1,llinatge2) 
                    values ('$usuari','$password','$nom','$llinatge1','$llinatge2');";
        echo "___".$query."<br/>";
        $result = mysqli_query($dbc, $query)
        or die('Error querying database.');
        mysqli_close($dbc);
    
    ?>
	
</body>

</html>
