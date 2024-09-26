<?php
require_once("conectar2.php");
?>
<html>
<head>
<title> Formulario huespedes </title>
<script language="JavaScript">
function validacion(formulario) {
  var listanumeros = "0123456789";
  var id_producto=formulario.id_producto.value;
 
  //ID producto

  if(id_producto.length<1) {
  
  alert('Dato Obligatorio');
  return false;
  }
  cont = 0;
  for(i=0;i<id_producto.length;i++)
  {
    ch = id_producto.charAt(i);
    for (j=0;j<listanumeros.length; j++)
    {
      if(ch ==listanumeros.charAt(j))
       {
         cont = cont + 1;
         j = listanumeros.length;
         break;
       }       
    }  
  }
  if(cont < id_producto.length)
  {
    alert("El campo codigo tiene caracteres NO validos");
    formulario.id_producto.focus();
    return (false);   
  }  

 
  //nombre producto
  var nombre_producto=formulario.nombre_producto.value;
  var listabecedario = " ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz";
  if(nombre_producto.length<1) {  
  alert('Dato Obligatorio');
  return false;
  }

  // validar caracteres NO reconocidos 
    cont = 0;
        for(n=0;n<nombre_producto.length;n++)
 {
      ch = nombre_producto.charAt(n);
        for (m=0;m<listabecedario.length; m++)

 {
          if(ch ==listabecedario.charAt(m))

    {

              cont = cont + 1;
    m = listabecedario.length;
    break;
      
      }     
 }  
 }

 if(cont < nombre_producto.length)
  
  {
    alert("El campo nombre tiene caracteres no reconocidos");
    formulario.nombre_producto.focus();
    return (false);   
}
}
  //ID valor producto

  if(valor_producto.length<1) {
  
  alert('Dato Obligatorio');
  return false;
  }
  cont = 0;
  for(i=0;i<valor_producto.length;i++)
  {
    ch = valor_producto.charAt(i);
    for (j=0;j<listanumeros.length; j++)
    {
      if(ch ==listanumeros.charAt(j))
       {
         cont = cont + 1;
         j = listanumeros.length;
         break;
       }       
    }  
  }
  if(cont < valor_producto.length)
  {
    alert("El campo codigo tiene caracteres NO validos");
    formulario.valor_producto.focus();
    return (false);   
  } 

//cantidad 
if(cantidad.length<1) {
  
  alert('Dato Obligatorio');
  return false;
  }
  cont = 0;
  for(i=0;i<cantidad.length;i++)
  {
    ch = cantidad.charAt(i);
    for (j=0;j<listanumeros.length; j++)
    {
      if(ch ==listanumeros.charAt(j))
       {
         cont = cont + 1;
         j = listanumeros.length;
         break;
       }       
    }  
  }
  if(cont < cantidad.length)
  {
    alert("El campo codigo tiene caracteres NO validos");
    formulario.cantidad.focus();
    return (false);   
  }





//cantitad total cantidad_total


if(cantidad_total.length<1) {
  
  alert('Dato Obligatorio');
  return false;
  }
  cont = 0;
  for(i=0;i<cantidad_total.length;i++)
  {
    ch = cantidad_total.charAt(i);
    for (j=0;j<listanumeros.length; j++)
    {
      if(ch ==listanumeros.charAt(j))
       {
         cont = cont + 1;
         j = listanumeros.length;
         break;
       }       
    }  
  }
  if(cont < cantidad_total.length)
  {
    alert("El campo codigo tiene caracteres NO validos");
    formulario.registro.focus();
    return (false);   
  }
  
</script>

</head>
<body>
<form name="f1" id="f1" method="post" action="grabardatoshuesped.php" OnSubmit="return validacion(this);">
 <h1>Captura datos</h1> <br>
 <br>
 Id producto: <input type="text" name="id_producto" id="id_producto">
 <br>
 Nombre producto: <input type="text" name="nombre_producto" id="nombre_producto">
 <br>
 Valor del producto: <input type="text" name="valor_producto" id="valor_producto">
 <br>
 Cantidad: <input type="text" name="cantidad" id="cantidad">
 <br>
 Total: <input type="text" name="cantidad_total" id="cantidad_total">
 <br>
<br>

<input type="submit" value="Grabar Datos">
</form>
</body>
</html>

