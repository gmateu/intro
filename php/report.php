
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
    $name=$_POST['firstname'].' '.$_POST['lastname'];
    $firstname=$_POST['firstname'];
    $lastname=$_POST['lastname'];
    $when_it_happened = $_POST['whenithappened'];
    $how_long = $_POST['howlong'];
    $how_many=$_POST['howmany'];
    $alien_description = $_POST['aliendescription'];
    $what_they_did=$_POST['whattheydid'];
    $fang_spotted = $_POST['fangspotted'];
    $email = $_POST['email'];
    $other=$_POST['other'];
    
    $msg = $name . ' was abducted ' . $when_it_happened . ' and was gone for ' . $how_long . '. ' .
    'Number of aliens: ' . $how_many . ' Alien description: ' . $alien_description . ' What they did: ' .
    $what_they_did . ' Fang spotted: ' . $fang_spotted . ' Other comments: ' . $other
    ?>
    <h1>msg:: <?php echo $msg;?></h1>
    <h1>Thanks for submitting the form.</h1>
    <p>You where abducted <?php echo $when_it_happened;?> and where gone for <?php echo $how_long;?></p>
    <p>Describe them: <?php echo $alien_description;?></p>
    <p>Was Fang there? <?php echo $fang_spotted;?></p>
    <p>Your email address is <?php echo $email;?></p>
    
    
    <?php
    $dbc = mysqli_connect('172.30.10.193', 'guillem', 'guillem', 'aliendatabase')
    or die('Error connecting to MySQL server.');
    $query = "INSERT INTO aliens_abduction (first_name, last_name, when_it_happened, how_long, " .
    "how_many, alien_description, what_they_did, fang_spotted, other, email) " .
    "VALUES ('$firstname', '$lastname', '$when_it_happened', '1 day', 'four', 'green with six tentacles', " .
    "'We just talked and played with a dog', 'yes', 'I may have seen your dog. Contact me.', " .
    "'sally@gregs-list.net')";
    echo "___".$query."<br/>";
    $result = mysqli_query($dbc, $query)
    or die('Error querying database.');
    mysqli_close($dbc);
    ?>
	
</body>

</html>










