
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
	<title>untitled</title>
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />
	<meta name="generator" content="Geany 1.23.1" />
    <script>
    var letras = ['T', 'R', 'W', 'A', 'G', 'M', 'Y', 'F', 'P', 'D', 'X', 'B', 'N', 'J', 'Z', 'S', 'Q', 'V', 'H', 'L', 'C', 'K', 'E', 'T'];
    var dni=prompt('Introduir dni: ');
    var lletra=prompt('Introduir lletra: ');
    
    if (dni>=0 && dni<=99999999){
        var mod = dni%23
        if (letras[mod]==lletra.toUpperCase()){
            alert('El seu NIF és: '+ dni+lletra.toUpperCase());
            }else{
            alert('La lletra introduïda no és correcta');    
            }
    }
    else{
        alert('El dni introduït no és correcte');
        }    
    </script>
</head>

<body>
	
</body>

</html>
