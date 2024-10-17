//como hacer un boton en html usando javascript

let boton=document.querySelector("#btn")
boton.addEventListener("click", respuestaClick)
function respuestaClick(){
alert("Respuesta evento")          
}

/*boton.onclick=()=>{console.log("respuesta2")}*/
function onclick(){
    alert("respuesta2")
}
//funcion oops
function changeText() {
    id.innerHTML = "Ooops!";
}  
/*funcion mostrar fecha*/ 
function displayDate() {
    document.getElementById("demo").innerHTML = Date();
  }

  function upperCase() {
    const x = document.getElementById("fname");
    x.value = x.value.toUpperCase();
  }

  /*nombre*/ 
  function upperCase() {
    const x = document.getElementById("fname");
    x.value = x.value.toUpperCase();
  }
  
  /**sobreescribir texto pasando el mouse*/
  function mOver(obj) {
    obj.innerHTML = "Thank You"
  }
  
  function mOut(obj) {
    obj.innerHTML = "Mouse Over Me"
  }

  /*funcion clic cambio de texto y color de fondo*/
  function mDown(obj) {
    obj.style.backgroundColor = "#1ec5e5"
    obj.innerHTML = "Release Me"
  }
  
  function mUp(obj) {
    obj.style.backgroundColor="#D94A38"
    obj.innerHTML="Thank You"
  }

  /*funcion Cambian una imagen cuando un usuario mantiene presionado el botón del mouse*/
  function lighton() {
    document.getElementById('myimage').src="img/myimage.gif"
  }
  function lightoff() {
    document.getElementById('myimage').src="img/myimage.gif"
  }