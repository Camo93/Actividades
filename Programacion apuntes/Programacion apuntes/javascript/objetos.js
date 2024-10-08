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

//iterador con for con base al contenido de arriba
for(propiedad in persona){
    console.log(persona[propiedad]);
}

//Usando un array
let personaArray=Object.values(persona)
console.log(personaArray)
let personaString=JSON.stringify(persona)
console.log(personaString)
console.log(persona)
function Persona (nombre='juan',apellido,email){
    this.nombre=nombre;
    this.apellido=apellido;
    this.email=email
    this.nombrecompleto=function(){
        return this.nombre+ ''+this.apellido
   }
}

//herencia
let padre = new Persona("Carlos","Torres","CT@gmail.com")
console.log(padre)
let madre = new Persona("Laura","Bejarano","LB@gmail.com")
console.log(madre)

//Funcion asignacion despues de llamar un metodo
function fsaludar(nombre){
    return("Hola " +nombre)
}
//Se declara la funcion con un parametro

var cliente1={
    saludar: fsaludar //se asigna la funcion al metodo
}
cliente1.saludar("Ernesto") //se invoca el metodo y se le pasa un argumento
console.log(cliente1.saludar("Ernesto"))

//como crear un objeto con una funcion anonima expresada
//closure
var constructor=function (precio){
    let miobjeto={
        preciobase:precio,
        iva:1.21,
        calcularIva:function(){
            return(this.preciobase*this.iva)
        }     
    }
    return miobjeto
}
precio1=constructor(100)
precio1.calcularIva()
console.log(precio1)

//closure
function mifuncion(){
    let count=1
    function contador(){
        console.log(count)
    }
    contador()
}
console.log(mifuncion())
//count 

//closure2
function miFuncion(){
    let _count = 1
    function contador(){
        return (_count)
    }
    return contador()
}
console.log(miFuncion())
_count

//
var x=10
function foo(){
    var y=20
    function bar(){
        var z=15
        var output=x+y+z
        return output    
    }
    return bar();
}
console.log(foo())

