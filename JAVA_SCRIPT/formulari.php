
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
	<title>Formularis</title>
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />
	<meta name="generator" content="Geany 1.23.1" />
    <script>
        function valida(){
                var form=document.getElementById("formulari");
                var nom=document.getElementById("nom");
                var form_validat=false;
                if(nom.value==""){
                        alert("has d'introduir un nom");
                }else{
                    form_validat=true;
                }
                if(form_validat){
                    form.submit();
                }
        }
    </script>
</head>
<body>
    <form action="formulari.php" id="formulari">
        <label>Nom:</label><input type="text" value="" id="nom" name="nom"/><br/>
        <input type="button" onclick="valida()" value="desa"/>
    </form>
</body>
</html>
