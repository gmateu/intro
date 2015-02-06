
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
	<title>FUNCIONS</title>
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />
	<meta name="generator" content="Geany 1.23.1" />
    <script>
        function suma(a,b){
            return a+b;
        }
        
        function resta(a,b){
            return a-b;
            
        }
        
        function producte(a,b){
            return a*b;
        }
        
        function divisio(a,b){
            return a/b;
        }
        
        function modul(a,b){
            return a%b;
        }
        
        function parell_senar(a){
            var m=a%2;    
            if (m==0){
                return "parell";
            }else{
                return "senar";
            }
        }
        function palindrom(cadena){ //exercici 9
            //PRIMER HEM DE LLEVAR ELS ESPAIS EN BLANC
            var cadenaAux="";
            for (c in cadena){
                    if (cadena[c]!=" "){
                            //concatenar a cadenaAux
                            cadenaAux+=cadena[c];
                    }
            }
            cadena=cadenaAux.toLowerCase();
            
            var llista=cadena.split("");
            var llistaInv=cadena.split("").reverse();
            
            i=0;
            
            while(i<llista.length){
                    if(llista[i]!=llistaInv[i]){
                            return false;                        
                    }
                    i++;
            }
            
            return true     
        }
        
        
        function majuscules_o_minuscules(cadena){
            var majuscules=cadena.toUpperCase();
            var minuscules=cadena.toLowerCase();
            
            if(majuscules==cadena){
                    return "TOTES ESTAN EN MAJÚSCULES";
            }
            if(minuscules==cadena){
                    return "totes estan en minúscules";
            }
            
            return "Estan majúscules i mínuscules mesclades";
        }
        
        
        
        //alert(majuscules_o_minuscules("hola que ase!"));
        
        alert(palindrom("La rutx nos aporto otro paso natural"));
    
    </script>
</head>

<body>
	
</body>

</html>
