//notacion json
let persona={
    nombre:"Camilo",
    apellido:"Betancur",
    telefono: 3205468795,
    email:"kmylobeta@gmail.com",
    edad:31
}

//llamando objetos
let persona3=new Object()
persona3.nombre="Teresa"
persona3.apellido="Betancur"
persona3.telefono=3102935656

//expresion anonima
let persona2={
    nombre:"Juan",
    apellido:"Orjuela",
    telefono:31223453,
    email:"jcorjuelab@libertadores.edu.co",
    edad:31,
    nombrecompleto: function(){
        return this.nombre+ ' '+this.apellido
    }
}

//mostrando json
console.log(persona["nombre"])
console.log(persona["apellido"])

//mostrando objetos
console.log(persona3)

//mostrando expresion anonima
for(nombrecompleto in persona2){
    console.log(nombrecompleto)
    console.log(persona2[nombrecompleto])
}

