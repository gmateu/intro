
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
	<title>Formularis</title>
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />
	<meta name="generator" content="Geany 1.23.1" />
    <script>
        function dniValid(valor){
            //retornar vertader o fals en funcio de si el dni és correcte
            //trobareu el codi al punt 7.3 de la documentació
            var letras = ['T', 'R', 'W', 'A', 'G', 'M', 'Y', 'F', 'P', 'D', 'X', 'B', 'N', 'J', 'Z', 'S', 'Q', 'V', 'H', 'L', 'C', 'K', 'E', 'T'];
             
            if( !(/^\d{8}[A-Z]$/.test(valor)) ) {
              return false;
            }
             
            if(valor.charAt(8) != letras[(valor.substring(0, 8))%23]) {
              return false;
            }
            
            return true;
            
        }
        
        function dataValid(valor){
                //si valor és una data correcta retornam true, sino false
                
        }
        function valida(){
                var form=document.getElementById("formulari");
                var nom=document.getElementById("nom");
                var dni=document.getElementById("dni");
                var dataNac=document.getElementById("dataNac");
                var form_validat=false;
                if(nom.value==""){
                        alert("has d'introduir un nom");
                }else if(!dniValid(dni.value)){
                        alert("has d'introduir un dni correcte");
                }else if(!dataValid(dataNac.value)){
                    alert("La data de naixament no és correcte");
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
        <label>Dni:</label><input type="text" value="" id="dni" name="dni"/><br/>
        <label>Data naixament:</label>
        <input type="text" value="" id="dataNac" name="dataNac"/><br/>
        <input type="button" onclick="valida()" value="desa"/>
    </form>
</body>
</html>
