<?php
require_once("conectar2.php");
?>
<html>
<head>
<title> Formulario huespedes </title>
<script language="JavaScript">
function validacion(formulario) {
  var listanumeros = "0123456789";
  var id_huesped=formulario.id_huesped.value;
 
  //ID huesped

  if(id_huesped.length<1) {
  
  alert('Dato Obligatorio');
  return false;
  }
  cont = 0;
  for(i=0;i<id_huesped.length;i++)
  {
    ch = id_huesped.charAt(i);
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
  if(cont < id_huesped.length)
  {
    alert("El campo codigo tiene caracteres NO validos");
    formulario.id_huesped.focus();
    return (false);   
  }  

 
  //lugar expedición 
  var lugar_expedicion=formulario.lugar_expedicion.value;
  var listabecedario = " ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz";
  if(lugar_expedicion.length<1) {  
  alert('Dato Obligatorio');
  return false;
  }

  // validar caracteres NO reconocidos 
    cont = 0;
        for(n=0;n<lugar_expedicion.length;n++)
 {
      ch = lugar_expedicion.charAt(n);
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

 if(cont < lugar_expedicion.length)
  
  {
    alert("El campo nombre tiene caracteres no reconocidos");
    formulario.lugar_expedicion.focus();
    return (false);   
}

  //Nombre huesped  
  var nombre_huesped=formulario.nombre_huesped.value;
  var listabecedario = " ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz";
  if(nombre_huesped.length<1) {  
  alert('Dato Obligatorio');
  return false;
  }

  // validar caracteres NO reconocidos 
    cont = 0;
        for(n=0;n<nombre_huesped.length;n++)
 {
      ch = nombre_huesped.charAt(n);
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

 if(cont < nombre_huesped.length)
  
  {
    alert("El campo nombre tiene caracteres no reconocidos");
    formulario.nombre_huesped.focus();
    return (false);   
}

//numero de telefono 
if(id_huesped.length<1) {
  
  alert('Dato Obligatorio');
  return false;
  }
  cont = 0;
  for(i=0;i<numero_telefono.length;i++)
  {
    ch = numero_telefono.charAt(i);
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
  if(cont < numero_telefono.length)
  {
    alert("El campo codigo tiene caracteres NO validos");
    formulario.numero_telefono.focus();
    return (false);   
  }

//Nacionalidad
 var nacionalidad=formulario.nacionalidad.value;
  var listabecedario = " ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz";
  if(nacionalidad.length<1) {  
  alert('Dato Obligatorio');
  return false;
  }

  // validar caracteres NO reconocidos 
    cont = 0;
        for(n=0;n<nacionalidad.length;n++)
 {
      ch = nacionalidad.charAt(n);
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

 if(cont < nacionalidad.length)
  
  {
    alert("El campo nombre tiene caracteres no reconocidos");
    formulario.nacionalidad.focus();
    return (false);   
}

//Estado civil 
var estado_civil=formulario.estado_civil.value;
  var listabecedario = " ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz";
  if(estado_civil.length<1) {  
  alert('Dato Obligatorio');
  return false;
  }

  // validar caracteres NO reconocidos 
    cont = 0;
        for(n=0;n<estado_civil.length;n++)
 {
      ch = estado_civil.charAt(n);
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

 if(cont < estado_civil.length)
  
  {
    alert("El campo nombre tiene caracteres no reconocidos");
    formulario.estado_civil.focus();
    return (false);   
}

//Profesion 
var profesion=formulario.profesion.value;
  var listabecedario = " ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz";
  if(profesion.length<1) {  
  alert('Dato Obligatorio');
  return false;
  }

  // validar caracteres NO reconocidos 
    cont = 0;
        for(n=0;n<profesion.length;n++)
 {
      ch = profesion.charAt(n);
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

 if(cont < profesion.length)
  
  {
    alert("El campo nombre tiene caracteres no reconocidos");
    formulario.profesion.focus();
    return (false);   
}

//Prosedencia 
var prosedencia=formulario.prosedencia.value;
  var listabecedario = " ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz";
  if(prosedencia.length<1) {  
  alert('Dato Obligatorio');
  return false;
  }

  // validar caracteres NO reconocidos 
    cont = 0;
        for(n=0;n<prosedencia.length;n++)
 {
      ch = prosedencia.charAt(n);
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

 if(cont < profesion.length)
  
  {
    alert("El campo nombre tiene caracteres no reconocidos");
    formulario.prosedencia.focus();
    return (false);   
}

//Permanencia 
var permanencia=formulario.permanencia.value;
  var listabecedario = " ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz";
  if(permanencia.length<1) {  
  alert('Dato Obligatorio');
  return false;
  }

  // validar caracteres NO reconocidos 
    cont = 0;
        for(n=0;n<permanencia.length;n++)
 {
      ch = permanencia.charAt(n);
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

 if(cont < permanencia.length)
  
  {
    alert("El campo nombre tiene caracteres no reconocidos");
    formulario.permanencia.focus();
    return (false);   
}

//Destino destino
var destino=formulario.destino.value;
  var listabecedario = " ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz";
  if(destino.length<1) {  
  alert('Dato Obligatorio');
  return false;
  }

  // validar caracteres NO reconocidos 
    cont = 0;
        for(n=0;n<destino.length;n++)
 {
      ch = destino.charAt(n);
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

 if(cont < destino.length)
  
  {
    alert("El campo nombre tiene caracteres no reconocidos");
    formulario.destino.focus();
    return (false);   
}

//Registro registro
//ID huesped

if(registro.length<1) {
  
  alert('Dato Obligatorio');
  return false;
  }
  cont = 0;
  for(i=0;i<registro.length;i++)
  {
    ch = registro.charAt(i);
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
  if(cont < registro.length)
  {
    alert("El campo codigo tiene caracteres NO validos");
    formulario.registro.focus();
    return (false);   
  }
  
</script>

</head>
<body>
<form name="f1" id="f1" method="post" action="grabardatoshuesped.php" OnSubmit="return validacion(this);">
 <h1>Captura  Docentes</h1> <br>
 Id huesped: <input type="text" name="id_huesped" id="id_huesped">
 <br>
 Lugar de expedición: <input type="text" name="lugar_expedicion" id="lugar_expedicion">
 <br>
 Nombre: <input type="text" name="nombre_huesped" id="nombre_huesped">
 <br>
 Numero de telefono: <input type="text" name="numero_telefono" id="numero_telefono">
 <br>
 Nacionalidad: <input type="text" name="nacionalidad" id="nacionalidad">
 <br>
 Estado civil: <input type="text" name="estado_civil" id="estado_civil">
 <br>
 Profesion: <input type="text" name="profesion" id="profesion">
 <br>
 Prosedencia: <input type="text" name="prosedencia" id="prosedencia">
 <br>
 Permanencia: <input type="text" name="permanencia" id="permanencia">
 <br>
 Destino: <input type="text" name="destino" id="destino">
 <br>
 Registro: <input type="text" name="registro" id="registro">
 <br>
<br>

<input type="submit" value="Grabar Datos">
</form>
</body>
</html>

